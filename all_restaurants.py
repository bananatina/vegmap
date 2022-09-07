def all_restaurants(app):

    # Fetching all rows from the table
    result = restaurant.query.order_by(restaurant.id).all()
    index_detail = city(result)
    # print(result)


    return index_detail


def restaurant_city(addr):
    # const damiDataStat = [156,35,25,126,79,85,3,10,15,36,45,11,2,49,33,21,16,75,18,19,32,21]
    # const cities = ["Kaohsiung City","Pingtung","Tainan City","Hsinchu City","Hsinchu","Yilan","Keelung City","Miaoli","Taipei City","New Taipei City","Taoyuan","Changhua","Chiayi","Chiayi City","Hualien","Nantou","Taichung City","Yunlin","Taitung","Penghu","Kinmen","Lienchiang"];
    # print (addr)
    city_amount_list=dict()
    # fullstring = "StackAbuse" substring = "tack" if substring in fullstring:     print("Found!") else:     print("Not found!")
    city_compaire=["Kaohsiung City","Pingtung","Tainan City","Hsinchu City","Hsinchu","Yilan","Keelung City","Miaoli","Taipei City","New Taipei City","Taoyuan","Changhua","Chiayi","Chiayi City","Hualien","Nantou","Taichung City","Yunlin","Taitung","Penghu","Kinmen","Lienchiang"]
    # for city_addr in addr:
    #     for substring in city_compaire:
    #         print(city_addr)
    #         if substring in city_addr:
    #             print("substring in city addr")
    #             if city_amount_list[substring] == NULL:
    #                 print("substring is null")
    #                 city_amount_list[substring]=1
    #             else:
    #                 print("substring is not null")
    #
    #                 city_amount_list[substring]=city_amount_list[substring]+1
    #         else:
    #             print("F")
    # print(type(addr))
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

    print(city_amount_list)
    # substring="keelung city"
    # for city_addr in addr:
    #
    #     addr_city_cut=city_addr.split()
    #     addr_city=addr_city_cut[len(addr_city_cut)]
    #     if substring.fullmatch(addr_city.lower()):
    #         print("substring in city addr")
    #         if substring not in city_amount_list:
    #             print("substring is null")
    #             city_amount_list[substring]=1
    #         else:
    #             print("substring is not null")
    #
    #             city_amount_list[substring]=city_amount_list[substring]+1
    #     else:
    #         print("F")
    # print(city_amount_list)
        # if city[address_len-2] not in city_amount_list:

    return city_amount_list
