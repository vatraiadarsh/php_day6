/* NOTE: difference in mysql and postgrace is 
    in Mysql-->auto_increament
    in postgrace-->serial
    and 
    in Mysql-->tinyint
    in postgrace-->boolean

 */

create table courses(id serial primary key,course_name varchar(21),
course_code varchar(5),course_fees int,duration int,duration_type char(1),
added_date timestamp default current_timestamp, modified_date timestamp null, status boolean);

/* NOTE: char(1) vanako day ko D week ko W aasari rakhna vanako
         modified_date timestamp null because insert garna balama hami tasli modify gardainau
 */
