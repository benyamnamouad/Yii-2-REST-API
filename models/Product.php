<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $reference
 * @property string $code
 * @property int $brand_id
 * @property int $quantity
 * @property int $alert_threshold
 * @property string $availability_date
 * @property int $views_number
 * @property int $category_id
 * @property string $description
 * @property double $default_price
 * @property int $min_quantity_order
 * @property int $deleted
 * @property int $status
 * @property int $stock_status
 * @property int $number_sales
 * @property string $main_image
 * @property string $image01
 * @property string $image02
 * @property string $image03
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $package_quantity
 * @property double $length
 * @property double $width
 * @property double $height
 * @property double $weight
 * @property int $weight_class
 * @property int $dimensions_class
 * @property int $type
 * @property int $parent_id
 * @property int $order_by_package
 * @property string $barcode_ean13
 * @property double $average_cost
 * @property int $starred
 * @property string $attachement_file
 * @property string $attachement_file_title
 * @property int $order
 *
 * @property Banner[] $banners
 * @property Discount[] $discounts
 * @property Favorite[] $favorites
 * @property GroupPrice[] $groupPrices
 * @property Group[] $groups
 * @property OrderProduct[] $orderProducts
 * @property Order[] $orders
 * @property Brand $brand
 * @property Category $category
 * @property ProductProperty[] $productProperties
 * @property PurchaseProduct[] $purchaseProducts
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id', 'quantity', 'alert_threshold', 'views_number', 'category_id', 'min_quantity_order', 'deleted', 'status', 'stock_status', 'number_sales', 'created_at', 'updated_at', 'created_by', 'updated_by', 'package_quantity', 'weight_class', 'dimensions_class', 'type', 'parent_id', 'order_by_package', 'starred', 'order'], 'integer'],
            [['availability_date'], 'safe'],
            [['description'], 'string'],
            [['default_price', 'length', 'width', 'height', 'weight', 'average_cost'], 'number'],
            [['name', 'reference', 'code', 'main_image', 'image01', 'image02', 'image03', 'attachement_file', 'attachement_file_title'], 'string', 'max' => 255],
            [['barcode_ean13'], 'string', 'max' => 13],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'reference' => 'Reference',
            'code' => 'Code',
            'brand_id' => 'Brand ID',
            'quantity' => 'Quantity',
            'alert_threshold' => 'Alert Threshold',
            'availability_date' => 'Availability Date',
            'views_number' => 'Views Number',
            'category_id' => 'Category ID',
            'description' => 'Description',
            'default_price' => 'Default Price',
            'min_quantity_order' => 'Min Quantity Order',
            'deleted' => 'Deleted',
            'status' => 'Status',
            'stock_status' => 'Stock Status',
            'number_sales' => 'Number Sales',
            'main_image' => 'Main Image',
            'image01' => 'Image01',
            'image02' => 'Image02',
            'image03' => 'Image03',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'package_quantity' => 'Package Quantity',
            'length' => 'Length',
            'width' => 'Width',
            'height' => 'Height',
            'weight' => 'Weight',
            'weight_class' => 'Weight Class',
            'dimensions_class' => 'Dimensions Class',
            'type' => 'Type',
            'parent_id' => 'Parent ID',
            'order_by_package' => 'Order By Package',
            'barcode_ean13' => 'Barcode Ean13',
            'average_cost' => 'Average Cost',
            'starred' => 'Starred',
            'attachement_file' => 'Attachement File',
            'attachement_file_title' => 'Attachement File Title',
            'order' => 'Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBanners()
    {
        return $this->hasMany(Banner::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscounts()
    {
        return $this->hasMany(Discount::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFavorites()
    {
        return $this->hasMany(Favorite::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupPrices()
    {
        return $this->hasMany(GroupPrice::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Group::className(), ['id' => 'group_id'])->viaTable('group_price', ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProduct::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['id' => 'order_id'])->viaTable('order_product', ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductProperties()
    {
        return $this->hasMany(ProductProperty::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseProducts()
    {
        return $this->hasMany(PurchaseProduct::className(), ['product_id' => 'id']);
    }
}
