SELECT 
    s.student_name, 
    s.student_surname, 
    s.student_age
FROM 
    student
AS 
    s 
JOIN 
    student_group 
AS 
    sg
ON 
    s.student_group_num = sg.group_num
WHERE 
    group_name = 'Prog-1';