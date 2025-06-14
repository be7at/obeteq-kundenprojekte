CREATE TABLE IF NOT EXISTS boats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    specs VARCHAR(255) NOT NULL
) CHARACTER SET utf8mb4;

INSERT INTO boats (name, description, image_url, specs) VALUES
('SeaRay 240', 'Modern motorlu tekne', '/img/searay240.jpg', 'Uzunluk: 7,3m, 300HP');
