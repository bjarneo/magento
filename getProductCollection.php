<?php
# Product collection
$products = Mage::getResourceModel('catalog/product_collection');

# Select all (*) filter by visibility (not equal to 1 (1 == Not visible individually, 2 == Catalog, 3 == Search)) and where status = 1 (enabled)
$products->addAttributeToSelect('*')->addAttributeToFilter('visibility', array('neq' => 1))->addAttributeToFilter('status', 1);

# Filter by attributes. Ex: 'like' => %param% / param% or like could be eq (equal) neq (not equal) so on.
$products->addAttributeToFilter(
    array(
        array('attribute' => 'custom_attr', 'like' => $param . '%'),
        array('attribute' => 'custom_attr2', 'eq' => $paramTwo)
    )
);

# You could also sort desc/asc so on by using this method:
$products->addAttributeToSort('created_at', 'desc');

# Loop through result:
foreach($products as $_product) {
    printf("%s <br />\r\n", $_product->getName());
}

?>