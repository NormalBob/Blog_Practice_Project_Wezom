-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 11 2018 г., 20:06
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `text`, `category_id`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet 1', 'lorem_ipsum_dolor_sit_amet_1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mattis lectus. Nullam vel imperdiet neque, at facilisis purus. Praesent tincidunt massa non arcu dapibus, at luctus erat luctus. Praesent rutrum commodo convallis. Sed non urna tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet eget mauris malesuada dapibus. Etiam volutpat scelerisque tellus, id gravida arcu pretium ac. Aenean hendrerit egestas enim, sed tempus purus feugiat vel. Sed feugiat, tellus vel finibus luctus, erat lectus dignissim purus, id aliquet purus ex ac sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis ante tristique, congue mi eget, interdum sapien. Sed condimentum at lectus quis ultrices. Sed posuere feugiat est, et ornare dolor commodo id. Duis consequat lorem ut ex finibus imperdiet. Vivamus ut magna ante.\r\n\r\nQuisque venenatis augue non erat convallis hendrerit. Nullam metus justo, ullamcorper in libero non, pulvinar feugiat metus. Duis lacinia augue quis blandit malesuada. Sed pretium bibendum urna et scelerisque. Curabitur in auctor enim. Quisque tempor justo non interdum sollicitudin. Vivamus est augue, ultricies quis mauris eu, euismod vestibulum massa.', 1, 'img.jpg', '2018-02-09 17:56:08', '2018-02-09 17:56:08'),
(2, 'Lorem ipsum dolor sit amet 2', 'lorem_ipsum_dolor_sit_amet_2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mattis lectus. Nullam vel imperdiet neque, at facilisis purus. Praesent tincidunt massa non arcu dapibus, at luctus erat luctus. Praesent rutrum commodo convallis. Sed non urna tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet eget mauris malesuada dapibus. Etiam volutpat scelerisque tellus, id gravida arcu pretium ac. Aenean hendrerit egestas enim, sed tempus purus feugiat vel. Sed feugiat, tellus vel finibus luctus, erat lectus dignissim purus, id aliquet purus ex ac sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis ante tristique, congue mi eget, interdum sapien. Sed condimentum at lectus quis ultrices. Sed posuere feugiat est, et ornare dolor commodo id. Duis consequat lorem ut ex finibus imperdiet. Vivamus ut magna ante.\r\n\r\nQuisque venenatis augue non erat convallis hendrerit. Nullam metus justo, ullamcorper in libero non, pulvinar feugiat metus. Duis lacinia augue quis blandit malesuada. Sed pretium bibendum urna et scelerisque. Curabitur in auctor enim. Quisque tempor justo non interdum sollicitudin. Vivamus est augue, ultricies quis mauris eu, euismod vestibulum massa.', 2, 'img.jpg', '2018-02-09 17:56:08', '2018-02-09 17:56:08'),
(3, 'Lorem ipsum dolor 3', 'Lorem_ipsum_dolor_3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mattis lectus. Nullam vel imperdiet neque, at facilisis purus. Praesent tincidunt massa non arcu dapibus, at luctus erat luctus. Praesent rutrum commodo convallis. Sed non urna tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet eget mauris malesuada dapibus. Etiam volutpat scelerisque tellus, id gravida arcu pretium ac. Aenean hendrerit egestas enim, sed tempus purus feugiat vel. Sed feugiat, tellus vel finibus luctus, erat lectus dignissim purus, id aliquet purus ex ac sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis ante tristique, congue mi eget, interdum sapien. Sed condimentum at lectus quis ultrices. Sed posuere feugiat est, et ornare dolor commodo id. Duis consequat lorem ut ex finibus imperdiet. Vivamus ut magna ante.\r\n\r\nQuisque venenatis augue non erat convallis hendrerit. Nullam metus justo, ullamcorper in libero non, pulvinar feugiat metus. Duis lacinia augue quis blandit malesuada. Sed pretium bibendum urna et scelerisque. Curabitur in auctor enim. Quisque tempor justo non interdum sollicitudin. Vivamus est augue, ultricies quis mauris eu, euismod vestibulum massa.', 4, 'img.jpg', '2018-02-10 20:43:17', '2018-02-10 20:43:17'),
(4, 'Lorem ipsum dolor 4', 'Lorem_ipsum_dolor_4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mattis lectus. Nullam vel imperdiet neque, at facilisis purus. Praesent tincidunt massa non arcu dapibus, at luctus erat luctus. Praesent rutrum commodo convallis. Sed non urna tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet eget mauris malesuada dapibus. Etiam volutpat scelerisque tellus, id gravida arcu pretium ac. Aenean hendrerit egestas enim, sed tempus purus feugiat vel. Sed feugiat, tellus vel finibus luctus, erat lectus dignissim purus, id aliquet purus ex ac sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis ante tristique, congue mi eget, interdum sapien. Sed condimentum at lectus quis ultrices. Sed posuere feugiat est, et ornare dolor commodo id. Duis consequat lorem ut ex finibus imperdiet. Vivamus ut magna ante.\r\n\r\nQuisque venenatis augue non erat convallis hendrerit. Nullam metus justo, ullamcorper in libero non, pulvinar feugiat metus. Duis lacinia augue quis blandit malesuada. Sed pretium bibendum urna et scelerisque. Curabitur in auctor enim. Quisque tempor justo non interdum sollicitudin. Vivamus est augue, ultricies quis mauris eu, euismod vestibulum massa.', 3, 'img.jpg', '2018-02-10 20:43:17', '2018-02-10 20:43:17'),
(5, 'Lorem ipsum dolor sit 5', 'Lorem_ipsum_dolor_sit_5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mattis lectus. Nullam vel imperdiet neque, at facilisis purus. Praesent tincidunt massa non arcu dapibus, at luctus erat luctus. Praesent rutrum commodo convallis. Sed non urna tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet eget mauris malesuada dapibus. Etiam volutpat scelerisque tellus, id gravida arcu pretium ac. Aenean hendrerit egestas enim, sed tempus purus feugiat vel. Sed feugiat, tellus vel finibus luctus, erat lectus dignissim purus, id aliquet purus ex ac sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis ante tristique, congue mi eget, interdum sapien. Sed condimentum at lectus quis ultrices. Sed posuere feugiat est, et ornare dolor commodo id. Duis consequat lorem ut ex finibus imperdiet. Vivamus ut magna ante.\r\n\r\nQuisque venenatis augue non erat convallis hendrerit. Nullam metus justo, ullamcorper in libero non, pulvinar feugiat metus. Duis lacinia augue quis blandit malesuada. Sed pretium bibendum urna et scelerisque. Curabitur in auctor enim. Quisque tempor justo non interdum sollicitudin. Vivamus est augue, ultricies quis mauris eu, euismod vestibulum massa.', 1, 'igm.jpg', '2018-02-10 20:44:25', '2018-02-10 20:44:25'),
(6, 'Lorem ipsum dolor sit 6', 'Lorem_ipsum_dolor_sit_6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mattis lectus. Nullam vel imperdiet neque, at facilisis purus. Praesent tincidunt massa non arcu dapibus, at luctus erat luctus. Praesent rutrum commodo convallis. Sed non urna tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet eget mauris malesuada dapibus. Etiam volutpat scelerisque tellus, id gravida arcu pretium ac. Aenean hendrerit egestas enim, sed tempus purus feugiat vel. Sed feugiat, tellus vel finibus luctus, erat lectus dignissim purus, id aliquet purus ex ac sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis ante tristique, congue mi eget, interdum sapien. Sed condimentum at lectus quis ultrices. Sed posuere feugiat est, et ornare dolor commodo id. Duis consequat lorem ut ex finibus imperdiet. Vivamus ut magna ante.\r\n\r\nQuisque venenatis augue non erat convallis hendrerit. Nullam metus justo, ullamcorper in libero non, pulvinar feugiat metus. Duis lacinia augue quis blandit malesuada. Sed pretium bibendum urna et scelerisque. Curabitur in auctor enim. Quisque tempor justo non interdum sollicitudin. Vivamus est augue, ultricies quis mauris eu, euismod vestibulum massa.', 1, 'igm.jpg', '2018-02-10 20:44:25', '2018-02-10 20:44:25'),
(7, 'Lorem ipsum dolor sit 7', 'Lorem_ipsum_dolor_sit_7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mattis lectus. Nullam vel imperdiet neque, at facilisis purus. Praesent tincidunt massa non arcu dapibus, at luctus erat luctus. Praesent rutrum commodo convallis. Sed non urna tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet eget mauris malesuada dapibus. Etiam volutpat scelerisque tellus, id gravida arcu pretium ac. Aenean hendrerit egestas enim, sed tempus purus feugiat vel. Sed feugiat, tellus vel finibus luctus, erat lectus dignissim purus, id aliquet purus ex ac sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis ante tristique, congue mi eget, interdum sapien. Sed condimentum at lectus quis ultrices. Sed posuere feugiat est, et ornare dolor commodo id. Duis consequat lorem ut ex finibus imperdiet. Vivamus ut magna ante.\r\n\r\nQuisque venenatis augue non erat convallis hendrerit. Nullam metus justo, ullamcorper in libero non, pulvinar feugiat metus. Duis lacinia augue quis blandit malesuada. Sed pretium bibendum urna et scelerisque. Curabitur in auctor enim. Quisque tempor justo non interdum sollicitudin. Vivamus est augue, ultricies quis mauris eu, euismod vestibulum massa.', 2, 'igm.jpg', '2018-02-10 20:45:17', '2018-02-10 20:45:17'),
(8, 'Lorem ipsum dolor sit 8', 'Lorem_ipsum_dolor_sit_8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mattis lectus. Nullam vel imperdiet neque, at facilisis purus. Praesent tincidunt massa non arcu dapibus, at luctus erat luctus. Praesent rutrum commodo convallis. Sed non urna tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet eget mauris malesuada dapibus. Etiam volutpat scelerisque tellus, id gravida arcu pretium ac. Aenean hendrerit egestas enim, sed tempus purus feugiat vel. Sed feugiat, tellus vel finibus luctus, erat lectus dignissim purus, id aliquet purus ex ac sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur quis ante tristique, congue mi eget, interdum sapien. Sed condimentum at lectus quis ultrices. Sed posuere feugiat est, et ornare dolor commodo id. Duis consequat lorem ut ex finibus imperdiet. Vivamus ut magna ante.\r\n\r\nQuisque venenatis augue non erat convallis hendrerit. Nullam metus justo, ullamcorper in libero non, pulvinar feugiat metus. Duis lacinia augue quis blandit malesuada. Sed pretium bibendum urna et scelerisque. Curabitur in auctor enim. Quisque tempor justo non interdum sollicitudin. Vivamus est augue, ultricies quis mauris eu, euismod vestibulum massa.', 1, 'igm.jpg', '2018-02-10 20:45:17', '2018-02-10 20:45:17');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_categories`
--

CREATE TABLE `articles_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles_categories`
--

INSERT INTO `articles_categories` (`id`, `category_name`, `url`) VALUES
(1, 'Camp', 'camp'),
(2, 'Food', 'food'),
(3, 'Programming', 'programming'),
(4, 'Cyber Sport', 'cyber_sport');

-- --------------------------------------------------------

--
-- Структура таблицы `article_tag`
--

CREATE TABLE `article_tag` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `article_tag`
--

INSERT INTO `article_tag` (`article_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'The best post in the world', '2018-02-11 14:48:39', '2018-02-11 14:48:39'),
(2, 1, 1, 'The worst post in the world', '2018-02-11 14:48:39', '2018-02-11 14:48:39'),
(3, 1, 1, 'good', '2018-02-11 14:49:13', '2018-02-11 14:49:13'),
(4, 1, 1, 'I am the first', '2018-02-11 14:49:13', '2018-02-11 14:49:13'),
(5, 1, 1, 'hello', '2018-02-11 14:52:37', '2018-02-11 14:52:37'),
(6, 1, 8, 'Hello', '2018-02-11 14:53:35', '2018-02-11 14:53:35');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2018_02_09_172733_create_tags_table', 1),
(8, '2018_02_09_173227_create_articles_table', 1),
(9, '2018_02_10_173436_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'public', 'public', '2018-02-09 17:54:48', '2018-02-09 17:54:48'),
(2, 'private', 'private', '2018-02-09 17:54:48', '2018-02-09 17:54:48'),
(3, 'basic', 'basic', '2018-02-09 17:55:04', '2018-02-09 17:55:04'),
(4, 'default', 'default', '2018-02-09 17:55:04', '2018-02-09 17:55:04');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_title_unique` (`title`);

--
-- Индексы таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`article_id`,`tag_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_url_unique` (`url`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `articles_categories`
--
ALTER TABLE `articles_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
