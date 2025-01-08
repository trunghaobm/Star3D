## Yêu cầu hệ thống

Để chạy dự án này, bạn cần đảm bảo môi trường của mình đáp ứng các yêu cầu sau:

- PHP >= 8.1
- Composer
- MySQL hoặc SQLite
- Node.js và npm
- XAMPP

## Hướng dẫn cài đặt

### 1. Clone dự án

```bash
git clone https://github.com/trunghaobm/Star3D.git
cd Star3D
```

### 2 Cấu hình dự án

- Tạo tệp `.env` từ mẫu có sẵn:

```bash
cp .env.example .env
```

- Cấu hình các thông tin trong tệp `.env`, ví dụ:

```env
APP_NAME=Star3D
APP_ENV=local
APP_KEY=
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

- Tạo khóa ứng dụng:

```bash
php artisan key:generate
```

### 3. Thiết lập cơ sở dữ liệu

- Tạo cơ sở dữ liệu mới trong phpMyAdmin của XAMPP (nếu dùng MySQL).
- Chạy các lệnh migrate để tạo bảng:

```bash
php artisan migrate
```

### 4. Khởi chạy ứng dụng

Sử dụng lệnh để khởi chạy server phát triển của Laravel:

```bash
php artisan serve
```

Truy cập [http://localhost:8000](http://localhost:8000)

## Ghi chú

- Để sử dụng SQLite, bạn cần tạo file `database.sqlite` trong thư mục `database` và cấu hình `.env`:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database.sqlite
```
