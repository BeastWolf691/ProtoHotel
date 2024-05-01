CREATE TABLE rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    price DECIMAL(10, 2),
    available INT
);

INSERT INTO rooms (name, description, price, image, available) VALUES
('Chambre Standard', 'Une belle chambre pour deux personnes.', 100.00, 1),
('Chambre Luxe', 'Spacieuse et luxueuse, avec vue sur la mer.', 200.00, 0),
('Suite Royale', 'Notre suite la plus luxueuse.', 500.00, 1);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    email VARCHAR(255),
    fullname VARCHAR(255),
    password VARCHAR(255),
    address VARCHAR(255)
);

INSERT INTO users (username, email, fullname, password, address) VALUES ('Sophie', 'sophieduval@gmail.com', 'duval', 'hashed_password', '45 rue du désespoir');

CREATE TABLE hotels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

INSERT INTO hotels (name, description) VALUES ('Hôtel Plaza Athénée', 'Situé au cœur de Paris, cet hôtel offre une expérience luxueuse avec une vue magnifique sur la Tour Eiffel.');
