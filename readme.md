# 👟 SHOES SHOP - HỆ THỐNG CỬA HÀNG GIÀY THỜI TRANG

![WordPress](https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

Dự án xây dựng Website bán giày trực tuyến, tối ưu hóa trải nghiệm mua sắm và quản lý cửa hàng chuyên nghiệp. Đây là sản phẩm thực hành kỹ năng xây dựng hệ thống thương mại điện tử (E-commerce).

---

## 🌟 Tính năng nổi bật

| Tính năng | Mô tả chi tiết |
| :--- | :--- |
| **🛍️ Cửa hàng** | Hiển thị danh mục giày theo thương hiệu, size và màu sắc. |
| **🛒 Giỏ hàng** | Thêm/bớt sản phẩm, cập nhật số lượng và tính tiền tự động. |
| **🔍 Tìm kiếm** | Bộ lọc thông minh giúp khách hàng tìm đúng mẫu giày yêu thích. |
| **💳 Thanh toán** | Quy trình đặt hàng nhanh chóng, lưu trữ thông tin đơn hàng. |
| **🛠️ Quản trị** | Dashboard quản lý kho hàng, đơn hàng và thống kê doanh thu. |

---

## 🛠️ Công nghệ sử dụng

* **Nền tảng:** WordPress & WooCommerce.
* **Giao diện:** Custom CSS3, HTML5 & JavaScript.
* **Backend:** PHP.
* **Cơ sở dữ liệu:** MySQL.
* **Công cụ:** VS Code, Git, XAMPP Server.

---

## 🚀 Hướng dẫn cài đặt & Chạy dự án

### 1. Chuẩn bị môi trường
* Cài đặt **XAMPP** hoặc phần mềm giả lập Server tương đương.
* Đảm bảo thư mục dự án được đặt trong `C:/xampp/htdocs/`.

### 2. Thiết lập Cơ sở dữ liệu
1. Truy cập `localhost/phpmyadmin`.
2. Tạo database mới tên là: `shoes_shop_db`.
3. Import file dữ liệu mẫu: `/database/data_shop.sql`.

### 3. Cấu hình hệ thống
* Đổi tên file `wp-config-sample.php` thành `wp-config.php`.
* Cập nhật thông tin kết nối DB (`DB_NAME`, `DB_USER`, `DB_PASSWORD`).

### 4. Truy cập
* Mở trình duyệt và truy cập: `http://localhost/shop`

---

## ⚠️ Lưu ý bảo mật
* File `wp-config.php` đã được thêm vào `.gitignore` để tránh lộ thông tin server.
* Dữ liệu trong file `.sql` đã được làm sạch thông tin cá nhân.

---

## 👤 Thông tin tác giả

* **Họ và tên:** Nguyễn Thu Nguyệt

---
*Dự án được phát triển cho mục đích học tập và xây dựng Portfolio cá nhân.*