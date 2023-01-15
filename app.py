import os
import os.path as pth
from flask import Flask, render_template, request, url_for, redirect, send_from_directory
from flask_sqlalchemy import SQLAlchemy
from sqlalchemy import null
import operator

from all_restaurants import *

app = Flask(__name__, template_folder='template')
# root dir
app.config['ROOT_DIR'] = os.path.dirname(os.path.abspath(__file__))

# Configure參數設定
# 正式
# app.config['SQLALCHEMY_DATABASE_URI'] = "mysql://tinaroot:egk35sTjsf2@127.0.0.1:3306/fromzerostoo"

# local環境
app.config['SQLALCHEMY_DATABASE_URI'] = "mysql://root:asdf4321ASDF@127.0.0.1:3306/vegmap_test"

# 第二組參數要設定「SQLALCHEMY_TRACK_MODIFICATIONS」。這個設定如果設置為True後Flask-SQLAlchemy為追蹤各種改變的信號，這樣子會消耗額外的記憶體，官網上建議如果沒有特別需要，可設定為關閉裝態。因此，在這裡我們設定為False。
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
# 傳到SQLAlchemy
db = SQLAlchemy(app)


class Restaurant(db.Model):
    __tablename__ = 'restaurants'
    id = db.Column(db.Integer, primary_key=True)
    restaurant_cn = db.Column(db.String(30), unique=False, nullable=False)
    restaurant_en = db.Column(db.String(30), unique=False, nullable=False)
    diet_type = db.Column(db.String(30), unique=False, nullable=False)
    menu_type = db.Column(db.String(20), unique=False, nullable=False)
    status = db.Column(db.String(30), unique=False, nullable=False)
    language = db.Column(db.String(30), unique=False, nullable=False)
    telephone = db.Column(db.String(50), unique=False, nullable=False)
    address = db.Column(db.String(300), unique=False, nullable=False)
    transportation = db.Column(db.String(200), unique=False, nullable=False)
    business_hour = db.Column(db.String(20), unique=False, nullable=False)
    avg_cost = db.Column(db.String(20), unique=False, nullable=False)
    website = db.Column(db.String(300), unique=False, nullable=False)
    coordinate = db.Column(db.String(300), unique=False, nullable=False)

    # def __init__(self,id,restaurant_en,restaurant_cn,address):
    #     self.id=id
    #     self.restaurant_en=restaurant_en
    #     self.restaurant_cn=restaurant_cn
    #     self.address=address

    def __repr__(self):
        return f'<Restaurant {self.restaurant_en}>'


class RestaurantPic(db.Model):
    __tablename__ = 'rest_pic'
    rest_id = db.Column(db.Integer, primary_key=True)
    main_pic = db.Column(db.String(50), unique=True, nullable=False)
    pic1 = db.Column(db.String(50), unique=True, nullable=False)
    pic2 = db.Column(db.String(50), unique=True, nullable=False)
    pic3 = db.Column(db.String(50), unique=True, nullable=False)
    pic4 = db.Column(db.String(50), unique=True, nullable=False)
    pic5 = db.Column(db.String(50), unique=True, nullable=False)
    pic6 = db.Column(db.String(50), unique=True, nullable=False)
    pic7 = db.Column(db.String(50), unique=True, nullable=False)
    pic8 = db.Column(db.String(50), unique=True, nullable=False)


# 定義路由url地址
# endpoint：表示檢視函式名的字串形式。
# 不使用裝飾器也可以實現路由對映。
@app.route('/')
def index():
    # restaurants = Restaurant.query.order_by(Restaurant.address).all()
    restaurant_addr = list()
    city_avg = dict()
    restaurant_index_detail = dict()

    for addr in db.session.query(Restaurant.address).all():
        restaurant_addr.append(addr)

    city_amount, city_name = restaurant_city(restaurant_addr)
    print(city_name)

    # HOW TO USE LIKE IN SQLAlchemy
    # tag = request.form["tag"]
    # search = "%{}%".format(tag)
    # posts = Post.query.filter(Post.tags.like(search)).all()

    # tag = request.form["tag"]

    for city in city_name:
        search = "%" + city + "%"
        cost_temp = 0
        cost_count = 0
        # db.session.query(Restaurant.address).all()
        for cost in db.session.query(Restaurant.avg_cost).filter(Restaurant.address.like(search)).all():
            for row in cost:
                if (row == ""):
                    break
                else:
                    col_cost_temp = row.split("$", 1)
                    # print(col_cost_temp)
                    col_cost = int(col_cost_temp[1])

                    cost_temp = cost_temp + col_cost
                    cost_count = cost_count + 1

            if (cost_count > 0):
                city_avg[city] = cost_temp / cost_count
            else:
                city_avg[city] = "N/A"
        # print(city_avg)

        for menu in db.session.query(Restaurant.diet_type).filter(Restaurant.address.like(search)).all():
            vegan_count = 0
            vegetarian_count = 0
            buddhist_count = 0
            diet_max = dict()
            for row in menu:
                if "egan" in row:
                    vegan_count = vegan_count + 1
                if "egetarian" in row:
                    vegetarian_count = vegetarian_count + 1
                if "Buddhist" in row:
                    buddhist_count = buddhist_count + 1
            diet_max["vegan"] = vegan_count
            diet_max["vegetarian"] = vegetarian_count
            diet_max["buddhist"] = buddhist_count
            # max(diet_max.iteritems(), key=operator.itemgetter(1))[0]
            city_avg[city] = max(diet_max.items(), key=operator.itemgetter(1))[0]
            # print('city_avg=', city_avg)
            # print("vegan_c=", vegan_count, "/ vegetarian_c=", vegetarian_count, "/ buddhist_c=", buddhist_count)
        # print(city, ":", cost_temp, "/", cost_count, "=", cost_temp / cost_count)

    restaurant_index_detail

    return render_template("index.html", restaurants=city_amount)


# 靜態檔案路徑指定
@app.route('/static/<path:filename>')
def route_static(filename):
    directory = pth.join(app.config['ROOT_DIR'], 'static/')
    return send_from_directory(directory, filename)


# 資源路徑指定
@app.route('/views/assets/<path:filename>')
def route_assets(filename):
    directory = pth.join(app.config['ROOT_DIR'], 'views/assets')
    return send_from_directory(directory, filename)


# __name__表示當前模組名，如果被匯入檔案的時候__name__表示檔名
if __name__ == '__main__':
    # print(app.url_map)
    # 啟動伺服器
    # app.debug = True
    app.run()
    # app.run('129.153.62.32')
