CREATE TABLE rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    price DECIMAL(10, 2),
    image_path VARCHAR(255)
);

INSERT INTO rooms (name, description, price, image_path) VALUES
('Chambre Standard', 'Une belle chambre pour deux personnes.', 100.00, 'images/rooms/chb 2 lits simples 109.jpg'),
('Chambre Luxe', 'Spacieuse et luxueuse, avec vue sur la mer.', 200.00, 'images/rooms/chb 2 lits simples 109.jpg'),
('Suite Royale', 'Notre suite la plus luxueuse.', 500.00, 'images/rooms/chb 2 lits simples 111.jpg');


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    email VARCHAR(255),
    fullname VARCHAR(255),
    password VARCHAR(255),
    address VARCHAR(255)
);

INSERT INTO users (username, email, fullname, password, address) VALUES();
