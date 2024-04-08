CREATE TABLE Students (
    StudentID INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(50) UNIQUE NOT NULL,
    PasswordHash VARCHAR(255) NOT NULL
);
INSERT INTO Students (Username, PasswordHash) VALUES
('student1', 'hashed_password1'),
('student2', 'hashed_password2');
