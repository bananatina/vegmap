import mysql.connector
db_settings = {
    "host": "127.0.0.1",
    "port": 3306,
    "user": "tinaroot",
    "password": "egk35sTjsf2",
    "db": "tinalab_db",
    "charset": "utf8"
}


def database():
    try:
        # establishing the connection
        conn = mysql.connector.connect(**db_settings)

    except:
        return "Impossible to connect to the database, check your code."

    # Creating a cursor object using the cursor() method
    cursor = conn.cursor()

    # Retrieving single row
    sql = '''SELECT * from restaurants limit 1'''
    # local_name, restaurant_amount, avg_cost

    # Executing the query
    cursor.execute(sql)

    # Fetching 1st row from the table
    result = cursor.fetchone()
    print(result)

    # Fetching 1st row from the table
    result = cursor.fetchall()
    print(result)

    # Closing the connection
    conn.close()

    return result


def test():
    list_object = ['local name', 'restaurant amount', 'cost']
    return list_object
