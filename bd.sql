CREATE TABLE laravel_db.books (
	id INT auto_increment NOT NULL PRIMARY KEY,
	title varchar(255) NULL,
	author varchar(100) NULL,
	description MEDIUMTEXT NULL,
	isbn varchar(100) NOT NULL,
	publication_year INT NULL,
	cover_image varchar(255) NULL,
	pdf_path varchar(255) NULL,
	created_at TIMESTAMP NULL,
	updated_at varchar(100) NULL,
	CONSTRAINT books_unique UNIQUE KEY (isbn),
	CONSTRAINT books_pk PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;
