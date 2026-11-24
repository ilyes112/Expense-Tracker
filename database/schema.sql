
CREATE TABLE users (
    user_id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    category_id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INT NOT NULL REFERENCES users(user_id)
        ON DELETE CASCADE,
    name VARCHAR(100) NOT NULL,
    color VARCHAR(7) NOT NULL DEFAULT '#808080',

    UNIQUE (user_id, name),
    UNIQUE (category_id, user_id),

    CHECK (color ~ '^#[0-9A-Fa-f]{6}$')
);

CREATE TABLE expenses (
    expense_id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INT NOT NULL REFERENCES users(user_id)
        ON DELETE CASCADE,
    category_id INT NOT NULL,
    amount NUMERIC(12, 2) NOT NULL CHECK (amount > 0),
    title VARCHAR(150) NOT NULL,
    expense_date DATE NOT NULL DEFAULT CURRENT_DATE,
    description TEXT,

    FOREIGN KEY (category_id, user_id)
        REFERENCES categories(category_id, user_id)
);

CREATE TABLE savings (
    savings_id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INT NOT NULL REFERENCES users(user_id)
        ON DELETE CASCADE,
    title VARCHAR(150) NOT NULL,
    target_amount NUMERIC(12, 2) NOT NULL
        CHECK (target_amount > 0),
    current_amount NUMERIC(12, 2) NOT NULL DEFAULT 0
        CHECK (current_amount >= 0),
    target_date DATE,

    CHECK (current_amount <= target_amount)
);
