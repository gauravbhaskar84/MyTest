This project contains majorly 5 containers:

1. php (to handle files received from apache containers)
2. apache (2 containers - apache1 and apache2)
3. redis (to save session from PHP)
4. ELK Stack - to capture Apache Logs

To use this project:

git clone https://github.com/gauravbhaskar84/MyTest.git
cd MyTest
docker-compose up

Verify ElasticSearch

http://localhost:9200 on Browser or curl http://localhost:9200 using linux terminal.

