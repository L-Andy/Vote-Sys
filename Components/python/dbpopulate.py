import MySQLdb as db, csv, argparse


try:
    connection = db.connect(host='localhost', user='root', password='p@ssw0rd', db='Vote')
    print "Db connection succesfully"
except db.Error as e:
        print "Error occured: {}".format(e)
QueryRunner = connection.cursor()
firstNames = []
passports = []

def dataDump():
    Query = """INSERT INTO `Vote`.`Users` 
            (`passportNo`, `firstName`, `secondName`, `sex`, `email`, `phoneNo`, `home`, `university`, `course`, `yearOfAward`, `voted`) 
            VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"""
    with open('/home/landy/Desktop/students2.csv') as csv_file:
        csv_reader = csv.reader(csv_file, delimiter=',')
        print "Starting data entry. \n"
        for row in csv_reader:
            data = (
                    row[2],
                    row[0],
                    row[1],
                    ' ',
                    ' ',
                    ' ',
                    ' ',
                    ' ',
                    ' ',
                    '2019',
                    'No'
                )
            print row
            try:
                QueryRunner.execute(Query, data)
                connection.commit()
                print row
                print "\n"
                print "Data added succesfully"

            except db.Error as e:
                print "Error entering data: {}".format(e)

        print "Data entery successfully."
    
def dataVerifier():
    Query = """SELECT * FROM `Vote`.`Users`"""
    QueryRunner.execute(Query)
    rows = QueryRunner.fetchall()
    print "Extracted {} rows from the database".format(len(rows))
    for i in rows:
        passports.append(i[0])

    with open('/home/landy/Desktop/students.csv') as csv_file:
        csv_reader = csv.reader(csv_file, delimiter=',')
        print "Starting data check"
        for rows in csv_reader:
            if (rows[1] not in passports):
                print "{} :: {}".format(rows[0], rows[1])
            else:
                print "***{} is verified".format(rows[0])
                continue

dataDump()
dataVerifier()
def main():
    ap = argparse.ArgumentParser(description="Simple py script to dump and verify mass data to mysql data")
    ap.add_argument('-D', '--dump', type=str, help="Add multiple data to data from a csv")
    ap.add_argument('-V', '--verify',type=str, help="Verify added data using a dumping csv")
    args = ap.parse_args()

if __name__ == '_main__':
    main()