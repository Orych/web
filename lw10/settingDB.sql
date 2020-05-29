DROP DATABASE University;
CREATE DATABASE University;
USE University;

CREATE TABLE faculty (
    faculty_num INTEGER(3) UNSIGNED,
    faculty_name VARCHAR(20),
    PRIMARY KEY (faculty_num)
);

CREATE TABLE student_group (
    group_num INTEGER(5) UNSIGNED,
    group_name VARCHAR(20),
    group_faculty_num INTEGER(3) UNSIGNED,
    PRIMARY KEY (group_num),
    FOREIGN KEY (group_faculty_num) REFERENCES faculty (faculty_num) ON DELETE CASCADE
);

CREATE TABLE student(
    student_num INTEGER(5),
    student_name VARCHAR(20),
    student_surname VARCHAR(20),
    student_age INTEGER(5),
    student_group_num INTEGER(5) UNSIGNED,
    PRIMARY KEY (student_num),
    FOREIGN KEY (student_group_num) REFERENCES student_group (group_num) ON DELETE CASCADE
);


