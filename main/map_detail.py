import cgi
import mysql.connector

db_settings = {
    "host": "127.0.0.1",
    "port": 3306,
    "user": "tinaroot",
    "password": "egk35sTjsf2",
    "db": "tinalab_db",
    "charset": "utf8"
}
#establishing the connection
conn = mysql.connector.connect(**db_settings)

#Creating a cursor object using the cursor() method
cursor = conn.cursor()

#Retrieving single row
sql = '''SELECT * from restaurants limit 1'''

#Executing the query
cursor.execute(sql)

#Fetching 1st row from the table
result = cursor.fetchone();
print(result)

#Fetching 1st row from the table
result = cursor.fetchall();
print(result)
print('<p>'+result+'</p>')

#Closing the connection
conn.close()


# print("Content-type:text/html\r\n\r\n")
# print('<pre>')
# form = cgi.FieldStorage()
# for var in form:
#     print("field:", var)
#     print("value:", form[var].value)
# print('</pre>')