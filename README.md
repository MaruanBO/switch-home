<p align="center"><img src="https://i.ibb.co/Lt9NMwg/profile.png" width="200"></p>

<p align="center">
<img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status">
<img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License">
</p>

## About Switch-Home (OBSOLETE)

>This project it's not finished i just finished because i need present this to my teachears u can do something so cool if u want i only give u the tools and something to start to learning or to do this better :)

This a web application for my final project to my school to control home automation system with real time simulation. I make it with Laravel 7.11.0 ,VueJS 2.5.16, JS, Jquery, Ajax. I make it all whit free tools!

If u are learning how to use laravel this is a great example i used advanced laravel systems with ajax, JS, VueJS to front-end and laravel in back-end

***Don't use this in production environment if u do this it's your problem***

## What have this proyect

* Login control access (Register it's disabled)
* Real time notifications
* Actions alert like shutdown components...
* Email notifications with mask as read, mask all, mask delete, mask all delete,unread unified by id... so u can has multiple notifications in differents users because all data it's separated.
* Full responsive design with animations and pro font awesome icons( 15% icons it's pro).
* Modal confirmations
* Quick access in dashboard (U can see all data about components with a dynamic system to counts on/off components, intruder, total energy, access control, spotify api, weather widget, light control and more)
* Profile administration
* Dynamic data process
* Custom intruder alert via email
* Custom reset password email
* Custom email verification
* Password verify
* Custom verify email account
* Custom error pages
* Custom auth pages
* Clean coding
* Own On/Off System
* Sweet alert 2
* Dynamic search box to all componentes with validations
* Real time sensor simulator with modal bootstrap 4, 10 second countdown to input 4 digits code if u don't input correct code system call the police and play police sound...
* Real time camare simulator, if u shutdown camare or system detect any intruder.
* Events, jobs, triggers, listeners and more..
* Form Request Validation
* Eloquent
* Postgres Database
* Spanish Lenguage (if u translate this to another lenguage please make me pull request)

***And more things u can check this for your own learning i did it in 15 days so u can consider this is a BETA, i'm a student so if u see anything can be better please contact me and make me better!***

## How to use

Download postgresql (my version is 12.3 Ubuntu 12.3-1.pgdg18.04+1)
```
https://www.postgresql.org/download/linux/ubuntu/
```
Download pg_admin (my version is 4.21 optional don't use this)
```
apt-get install pgadmin4
```
Restore ur database with switch-home_database.sql:
```
pg_restore -U domotica -d root -1 switch-home_database.sql
```
Install laravel framework
```
https://laravel.com/docs/7.x/installation
```
Install Bootstrap-vue
```
https://bootstrap-vue.org/docs
```
Create ur own proyect
```
laravel new Switch-Home
```
Clone or download this repository in ur proyect
```
git clone https://github.com/MaruanBO/home-automation/tree/master
```
Create ur pusher and mailtrap account put ur credentials like .env.example
```
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@switch-home.com

PUSHER_APP_ID=your_id
PUSHER_APP_KEY=your_key
PUSHER_APP_SECRET=your_secret
PUSHER_APP_CLUSTER=your_cluster
```
Deploy server and ENJOY!!
```
php artisan serve
```

To use simulator just open tab in http://dashboard-switchome.herokuapp.com/ or http://127.0.0.1:8000/ and another tab in http://127.0.0.1:8000/notify or http://dashboard-switchome.herokuapp.com/notify. If u wanna apply that in all views make layouts with modal and script data and enjoy!

## Screenshots

#### Login
![alt text](https://i.ibb.co/xKkd3Px/Anotaci-n-2020-06-03-230800.png "login")
#### Simulator

![alt text](https://i.ibb.co/wWMVD2K/sensor.png "Sensor")

#### Dashboard

![alt text](https://i.ibb.co/KzngKXh/dashboard.png "dashboard")

#### Components

![alt text](https://i.ibb.co/CBx1qFn/componentes.png "componentes")

#### Error page

![alt text](https://i.ibb.co/sb6mqDV/error-page.png "error_page")

## Demo

* http://dashboard-switchome.herokuapp.com/

Credentials:

* User: test@test.com
* Password: Profesorado234/ 

## That i have used? 

* Computer: Hp omen 15-dc1036ns
* System: Ubuntu 16.04
* Code editor: Sublime text 3
* Laravel: https://laravel.com/
* VueJS: https://vuejs.org/
* Boostrap-vue: https://bootstrap-vue.org/
* Postgresql: https://www.postgresql.org/
* Free heroku hosting plan:  https://www.heroku.com/
* Free pusher: https://pusher.com/
* Free mail: https://mailtrap.io/

## Contact me

If u wanna learning or contribuit with me to learning or anything u want please contact me
* maruanbueno55@gmail.com

## License

The Switch-Home code is available at GitHub under the Open-Source MIT license.

> Developed by Maruan Boukhriss with Love my english it's so bad sorry. 

