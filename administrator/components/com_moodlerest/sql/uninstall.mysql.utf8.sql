DROP TABLE IF EXISTS `#__moodlerest_courses`;

DELETE FROM `#__content_types` WHERE (type_alias LIKE 'com_moodlerest.%');