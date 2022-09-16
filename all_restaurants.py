import json
def all_restaurants(app):

    # Fetching all rows from the table
    result = restaurant.query.order_by(restaurant.id).all()
    index_detail = city(result)
    # print(result)


    return index_detail


def restaurant_city(addr):

    city_amount_list=dict()

    for row in addr:
        for city_addr in row:
            # print(type(city_addr))
            # print(city_addr.split(",",-1))
            col_city_addr=city_addr.split(", ",-1)
            len_city_addr=len(col_city_addr)
            city=col_city_addr[len_city_addr-1]
            if city not in city_amount_list:
                city_amount_list[city]=1
            else:
                city_amount_list[city]=city_amount_list[city]+1

    # print(city_amount_list)
    # json_object = json.dumps(city_amount_list, indent = 4)
    # print(json_object)
    with open('all_restaurants.json','w') as json_file:
        json.dump(city_amount_list, json_file)

    return json_file
