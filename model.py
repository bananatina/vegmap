import os
from flask import Flask
from flask import render_template
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)

# Configure參數設定
# 正式
# app.config['SQLALCHEMY_DATABASE_URI'] = "mysql+pymysql://tinaroot:egk35sTjsf2@h127.0.0.1:3306/fromzerostoo"

# local環境
app.config['SQLALCHEMY_DATABASE_URI'] = "mysql+pymysql://root:asdf4321ASDF@h127.0.0.1:3306/vegmap_test"

# 第二組參數要設定「SQLALCHEMY_TRACK_MODIFICATIONS」。這個設定如果設置為True後Flask-SQLAlchemy為追蹤各種改變的信號，這樣子會消耗額外的記憶體，官網上建議如果沒有特別需要，可設定為關閉裝態。因此，在這裡我們設定為False。
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = True
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

    # def __init__(self, id, restaurant_cn, restaurant_en, diet_type, menu_type, status, language, telephone, address,
    #              transportation, business_hour, avg_cost, website, coordinate):
    #     self.id = id
    #     self.restaurant_cn = restaurant_cn
    #     self.restaurant_en = restaurant_en
    #     self.diet_type = diet_type
    #     self.menu_type = menu_type
    #     self.status = status
    #     self.language = language
    #     self.telephone = telephone
    #     self.address = address
    #     self.transportation = transportation
    #     self.business_hour = business_hour
    #     self.avg_cost = avg_cost
    #     self.website = website
    #     self.coordinate = coordinate


class RestaurantPic(db.Model):
    __tablename__='rest_pic'
    rest_id = db.Column(db.Integer, primary_key=True)
    main_pic=db.Column(db.String(50), unique=True, nullable=False)
    pic1=db.Column(db.String(50), unique=True, nullable=False)
    pic2=db.Column(db.String(50), unique=True, nullable=False)
    pic3=db.Column(db.String(50), unique=True, nullable=False)
    pic4=db.Column(db.String(50), unique=True, nullable=False)
    pic5=db.Column(db.String(50), unique=True, nullable=False)
    pic6=db.Column(db.String(50), unique=True, nullable=False)
    pic7=db.Column(db.String(50), unique=True, nullable=False)
    pic8=db.Column(db.String(50), unique=True, nullable=False)

    # def __init__(self, pic1, pic2,pic3,pic4,pic5,pic6,pic7,pic8):
    #     self.pic1=pic1
    #     self.pic2=pic2
    #     self.pic3=pic3
    #     self.pic4=pic4
    #     self.pic5=pic5
    #     self.pic6=pic6
    #     self.pic7=pic7
    #     self.pic8=pic8