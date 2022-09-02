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
    city_amount_list=dic()
    city_compaire=["Kaohsiung City","Pingtung","Tainan City","Hsinchu City","Hsinchu","Yilan","Keelung City","Miaoli","Taipei City","New Taipei City","Taoyuan","Changhua","Chiayi","Chiayi City","Hualien","Nantou","Taichung City","Yunlin","Taitung","Penghu","Kinmen","Lienchiang"]
    for city_addr in addr:
        address_len=len(city_addr)
        city
        print(city[address_len-2])
        # if city[address_len-2] not in city_amount_list:

    return city_detail
