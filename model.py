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
app.config['SQLALCHEMY_TRACK_MODIFICATIONS']=True
# 傳到SQLAlchemy
db = SQLAlchemy(app)


class restaurant(db.Model):
    __tablename__='restaurants'
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
    avg_cost= db.Column(db.String(20), unique=False, nullable=False)
    website = db.Column(db.String(300), unique=False, nullable=False)
    coordinate = db.Column(db.String(300), unique=False, nullable=False)