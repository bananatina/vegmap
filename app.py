import os
import os.path as pth
from flask import Flask, send_from_directory, render_template
from model import restaurant

app = Flask(__name__, template_folder='template')
#root dir
app.config['ROOT_DIR'] = os.path.dirname(os.path.abspath(__file__))


# 定義路由url地址
# endpoint：表示檢視函式名的字串形式。
# 不使用裝飾器也可以實現路由對映。
@app.route('/')
def index():
    get_all_restaurants = restaurant(app)
    return render_template("index.html", to_send=get_all_restaurants)

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
    app.debug = True
    app.run()
    # app.run('129.153.62.32')

