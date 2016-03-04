# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation
1.Download Entire Project
2.Configure Database
	1. This project has 3 tables/Models i.e.	Airports, Airlines, Routes and the relation between them is shown below
		![Database Design EER Diagram](/tripbuilderapi_db_design.png)

	2. MySql file for the database tables is included 	[here](/tripbuilderapi_app_table_strucutre.sql)

	3. Data for the tables is avaialble in csv format for [Airports](/airports.csv), [Airlines](/airlines.csv), [Routes](/routes_new.csv)

3.In order to access the api's use the path 
	1.[Airports](/tripbuilderapi.app/api/airports.json)
	2.[Airlines](/tripbuilderapi.app/api/airlines.json)
	3.[Routes](/tripbuilderapi.app/api/routes.json)
	
4. In order the access the frontend use the path
	1.[Airports](/tripbuilderapi.app/api/airports)
	2.[Airlines](/tripbuilderapi.app/api/airlines)
	3.[Routes](/tripbuilderapi.app/api/routes)
	
5. Constraints
	*Airports no new or delete constrain ie. post and delete will not work
	pass sort in querystring e.g. "?sort=Name"
		*sort by Airport_id, Name,Country

	*Airlines no new or delete constrain ie. post and delete will not work
	pass sort in querystring e.g. "?sort=Name"
		*sort by Airline_ID, Name,Country

	*Routes - Can perform all CRUD operations iff there is a coresponding airport and airline in airports and airlines table
	