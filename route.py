from flask import Flask
from flask import render_template
from index_details import database, test



@app.route('/')
def index():
    to_send=database()
    return render_template("index.html", to_send=to_send)

# 定義路由url地址
# endpoint：表示檢視函式名的字串形式。
# 不使用裝飾器也可以實現路由對映。



# __name__表示當前模組名，如果被匯入檔案的時候__name__表示檔名
if __name__ == '__main__':
    print(app.url_map)
    # 啟動伺服器
    app.run(debug=True)
