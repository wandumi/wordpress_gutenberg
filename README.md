# Gutenberg Custom Block Creation

## 📌 Project Description

This project is focused on **creating a custom Gutenberg block** in WordPress. It is built using modern JavaScript (React-based framework) and PHP for seamless integration into the WordPress editor.

## 👤 Author

Wandumi Munandi Sichali

## 🚀 Features

- Custom Gutenberg block for WordPress
- Supports dynamic content rendering
- Fully compatible with modern WordPress versions
- Easy to customize and extend

## 🛠️ Technologies Used

- WordPress
- React (JSX)
- PHP
- Gutenberg Block API
- CSS/SCSS

## Usage

The folders can be zipped and be installed as plugins on wordpress

# 🔧 On Task One Questions - wandumi-books

## 🚀 Addressing Plugin Structure Issues

📁 Lack of Proper Asset Organization
One issue I neglected to address was the present plugin structure's lack of suitable asset categorization. The CSS and JavaScript files are currently placed directly inside the main plugin folder, which can make the project more difficult to maintain as it expands. A more structured solution would be to create separate directories for stylesheets and JavaScript files, such as assets/css/ and assets/js/.

This separation not only enhances clarity but also makes it easier to manage updates, troubleshoot bugs, and expand the plugin without cluttering the root directory. Keeping assets organized is a best practice in plugin development, ensuring scalability and maintainability as the project grows.

Another thing to consider is that I had meant to use the suggested WordPress technique to create a Gutenberg block. However, I encountered various complications, most likely due to package version conflicts and compatibility challenges, which would have greatly extended development time. Because of these constraints, I chose an alternative solution that ensures the block performs properly while adhering to WordPress development best practices.

## 🔧 Missing Block Registration in PHP

Another shortcoming of my plugin is the lack of correct block registration in PHP. While my JavaScript handles the editor-side block behavior, the PHP file must explicitly register the block using register_block_type(). This ensures that the block is properly recognized by WordPress and loaded correctly in both the editor and frontend.

Furthermore, my plugin currently lacks localization capabilities, meaning it cannot accommodate translations for users in different languages. Implementing load_plugin_textdomain() would enable internationalization and make it easier to translate the plugin’s text strings. Adding this feature would significantly improve the plugin's accessibility and usability for a global audience.

## 🛠️ Future Improvements

If I had more time, I would restructure the code to improve folder organization and align with the recommended WordPress PHP structure.

# 🔧 On Task Two Questions - wandumi-books-block

## Explain how you would register the block in PHP.

The first step in developing a WordPress plugin is to configure the plugin directory and write the primary PHP file. Typically, the PHP filename corresponds to the folder name for consistency and ease of identification, with a structure akin to Object-Oriented Programming (OOP) concepts. This method ensures clarity and structure, especially when working with several plugins or huge projects.

Within this newly created plugin folder, the plugin header is defined at the top of the main PHP file. This header contains essential metadata such as the plugin name, description, author, and version number, which WordPress uses to recognize and manage the plugin. Additionally, the PHP file is responsible for enqueuing assets, including stylesheets (CSS) and scripts (JavaScript), ensuring that necessary files are properly loaded in both the editor and the frontend. One of the most critical aspects of the setup is the file that defines and registers the Gutenberg block, as this is where the actual block functionality is implemented. This file contains the JavaScript logic that controls how the block behaves in the editor and how it is displayed on the frontend, making it the core of the plugin’s functionality.

# Provide the PHP code required for registering the block.

I've shown how to register a custom Gutenberg block inside the plugin using the code that was submitted. The `wandumi-books-block` folder, more especially the `books-list-block.php` file, contains the block registration and its functionality. This file includes the PHP code required to correctly define and register the block using `register_block_type()`, guaranteeing that WordPress will recognize and load it.

Additionally, this file handles the server-side rendering, asset enqueuing, and other essential functions required for the block to work seamlessly in both the editor and the frontend. The registration process follows best practices, making use of the WordPress block editor API and ensuring compatibility with dynamic content. This structured approach allows for better maintainability and scalability of the plugin while keeping all necessary components well-organized within the plugin directory.

# Conclusion

In the wandumi-books-block folder, specifically within the books-list-block.php file, I have included all the necessary code to ensure the plugin performs its intended functionalities seamlessly. These files collectively handle block registration, JavaScript integration, and server-side rendering, allowing the plugin to function correctly in both the WordPress editor and on the frontend.

The code is structured to efficiently enqueue required assets, ensuring that styles and scripts are properly loaded. Additionally, it includes the logic for retrieving and displaying saved books, making the block dynamic and interactive. With these implementations, the plugin is fully operational, adhering to WordPress best practices while remaining maintainable and scalable for future enhancements.
