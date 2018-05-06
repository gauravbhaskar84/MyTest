This project contains majorly 5 containers:

1. php (to handle files received from apache containers)
2. apache (2 containers - apache1 and apache2)
3. redis (to save session from PHP)
4. ELK Stack - to capture Apache Logs

To verify ELasticsearch - curl http://localhost:9200

To check logs in Kibana - http://localhost:5601
	1. Create index using Management
	2. Search via Discovery on the left hand side
