CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

-- Insert a sample user (password is "test123")
INSERT INTO users (username, password) VALUES (
  'admin',
  '$2y$10$E1N2fCm3aZ9SXL1KbiGeceA7ENL1dXYCxtblK/AxFB7FYX2RCmGqC'
);
