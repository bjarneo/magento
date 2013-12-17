SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE `catalog_category_entity`;
TRUNCATE TABLE `catalog_category_entity_datetime`;
TRUNCATE TABLE `catalog_category_entity_decimal`;
TRUNCATE TABLE `catalog_category_entity_int`;
TRUNCATE TABLE `catalog_category_entity_text`;
TRUNCATE TABLE `catalog_category_entity_varchar`;
TRUNCATE TABLE `catalog_category_product`;
TRUNCATE TABLE `catalog_category_product_index`;

INSERT INTO `catalog_category_entity`(`entity_id`,`entity_type_id`,`attribute_set_id`,`parent_id`,`created_at`,`updated_at`,`path`,`POSITION`,`level`,`children_count`) VALUES (1,3,0,0,'0000-00-00 00:00:00','2009-02-20 00:25:34','1',1,0,1),(2,3,3,0,'2009-02-20 00:25:34','2009-02-20 00:25:34','1/2',1,1,0);

INSERT INTO `catalog_category_entity_int`(`value_id`,`entity_type_id`,`attribute_id`,`store_id`,`entity_id`,`value`) VALUES (1,3,32,0,2,1),(2,3,32,1,2,1);

INSERT INTO `catalog_category_entity_varchar`(`value_id`,`entity_type_id`,`attribute_id`,`store_id`,`entity_id`,`value`) VALUES (1,3,31,0,1,'Root Catalog'),(2,3,33,0,1,'root-catalog'),(3,3,31,0,2,'Default Category'),(4,3,39,0,2,'PRODUCTS'),(5,3,33,0,2,'default-category');
SET FOREIGN_KEY_CHECKS = 1;