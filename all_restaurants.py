def all_restaurants(app):

    # Fetching all rows from the table
    result = restaurant.query.order_by(restaurant.id).all()
    index_detail = city(result)
    # print(result)


    return index_detail


def city(results):
    city_dic = dict()
    city_cost_dic = dict()
    city_detail = list()
    count = 0
    for arr in results:
        # tuples for all query
        addr_city = arr[8].split()
        if arr[11] != '':
            addr_cost = arr[11].split('$')
        else:
            addr_cost = 0
        # print(addr_city)
        # print(len(addr_city))
        # print(addr_cost)
        addrlong = len(addr_city)

        # print(addr_city[addrlong-2])
        if addr_cost != 0:
            if addr_city[addrlong-2] not in city_dic:
                city_dic[addr_city[addrlong-2]] = 1
                # print(addr_cost[len(addr_cost)-1])
                # if addr_cost[len(addr_cost)-1]!= '':
                #     city_cost_dic[addr_city[addrlong-2]]=int(addr_cost[len(addr_cost)-1])
                # else:
                #     continue
                city_cost_dic[addr_city[addrlong-2]
                ] = int(addr_cost[len(addr_cost)-1])

            else:
                city_dic[addr_city[addrlong-2]
                ] = city_dic[addr_city[addrlong-2]]+1
                # if addr_cost[len(addr_cost)-1]!= '':
                #     city_cost_dic[addr_city[addrlong-2]]=city_cost_dic[addr_city[addrlong-2]]+int(addr_cost[len(addr_cost)-1])
                # else:
                #     continue
                city_cost_dic[addr_city[addrlong-2]] = city_cost_dic[addr_city[addrlong-2]]+int(
                    addr_cost[len(addr_cost)-1])

            # count+=1
            # print(count)
        else:
            # print(city_cost_dic)
            # count+=1
            # print(count)
            # print(addr_city)
            if addr_city[addrlong-2] not in city_dic:
                city_dic[addr_city[addrlong-2]] = 1
                city_cost_dic[addr_city[addrlong-2]] = 0

            else:
                city_dic[addr_city[addrlong-2]
                ] = city_dic[addr_city[addrlong-2]]+1
                city_cost_dic[addr_city[addrlong-2]
                ] = city_cost_dic[addr_city[addrlong-2]]+0
    # print(city_dic)
    # print(city_cost_dic)
    for city in city_dic:
        # print(type(city_cost_dic['Taipei']))
        # print(city_dic.get(city,0))
        # print(city[0],city[1],int(city_cost_dic[city[0]])/int(city[1]))
        city_detail.append([city, city_dic.get(city, 0), round(
            int(city_cost_dic[city])/city_dic.get(city, 0), 0)])
    return city_detail
# database()