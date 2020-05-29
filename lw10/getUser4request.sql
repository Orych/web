SELECT f.faculty_name, sg.group_name, sg.group_num, s.student_name
FROM student
AS s
Join student_group
AS sg
ON s.student_group_num = sg.group_num
JOIN faculty
AS f
ON sg.group_faculty_num = f.faculty_num
WHERE student_name = 'Egor' and student_surname = 'Vidyakin'
