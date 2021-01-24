Basic SQL Queries: 

_(i)Generate a Roster:_

`SELECT Account.name, Member.role, Course.title
FROM Account JOIN Member JOIN Course
ON Member.account_id = Account.account_id AND 
Member.course_id = Course.course_id
ORDER BY Course.title, Member.role DESC, Account.name 
`
