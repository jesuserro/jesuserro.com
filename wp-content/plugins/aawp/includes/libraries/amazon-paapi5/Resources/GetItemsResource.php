<?php
/**
 * Amazon Product Advertising API v5
 *
 * The use of this library is strictly prohibited without explicit permission.
 *
 * Copyright 2020 flowdee. All Rights Reserved.
 *
 * Twitter: https://twitter.com/flowdee
 * GitHub: https://github.com/flowdee
 */
namespace Flowdee\AmazonPAAPI5WP;

/**
 * Class GetItemsResource
 *
 * @category Class
 * @package Flowdee\AmazonPAAPI5
 * @author flowdee
 */
class GetItemsResource {

    /**
     * Defining constants
     */
    const BROWSE_NODE_INFOBROWSE_NODES = 'BrowseNodeInfo.BrowseNodes';
    const BROWSE_NODE_INFOBROWSE_NODESANCESTOR = 'BrowseNodeInfo.BrowseNodes.Ancestor';
    const BROWSE_NODE_INFOBROWSE_NODESSALES_RANK = 'BrowseNodeInfo.BrowseNodes.SalesRank';
    const BROWSE_NODE_INFOWEBSITE_SALES_RANK = 'BrowseNodeInfo.WebsiteSalesRank';
    const IMAGESPRIMARYSMALL = 'Images.Primary.Small';
    const IMAGESPRIMARYMEDIUM = 'Images.Primary.Medium';
    const IMAGESPRIMARYLARGE = 'Images.Primary.Large';
    const IMAGESVARIANTSSMALL = 'Images.Variants.Small';
    const IMAGESVARIANTSMEDIUM = 'Images.Variants.Medium';
    const IMAGESVARIANTSLARGE = 'Images.Variants.Large';
    const ITEM_INFOBY_LINE_INFO = 'ItemInfo.ByLineInfo';
    const ITEM_INFOCONTENT_INFO = 'ItemInfo.ContentInfo';
    const ITEM_INFOCONTENT_RATING = 'ItemInfo.ContentRating';
    const ITEM_INFOCLASSIFICATIONS = 'ItemInfo.Classifications';
    const ITEM_INFOEXTERNAL_IDS = 'ItemInfo.ExternalIds';
    const ITEM_INFOFEATURES = 'ItemInfo.Features';
    const ITEM_INFOMANUFACTURE_INFO = 'ItemInfo.ManufactureInfo';
    const ITEM_INFOPRODUCT_INFO = 'ItemInfo.ProductInfo';
    const ITEM_INFOTECHNICAL_INFO = 'ItemInfo.TechnicalInfo';
    const ITEM_INFOTITLE = 'ItemInfo.Title';
    const ITEM_INFOTRADE_IN_INFO = 'ItemInfo.TradeInInfo';
    const OFFERSLISTINGSAVAILABILITYMAX_ORDER_QUANTITY = 'Offers.Listings.Availability.MaxOrderQuantity';
    const OFFERSLISTINGSAVAILABILITYMESSAGE = 'Offers.Listings.Availability.Message';
    const OFFERSLISTINGSAVAILABILITYMIN_ORDER_QUANTITY = 'Offers.Listings.Availability.MinOrderQuantity';
    const OFFERSLISTINGSAVAILABILITYTYPE = 'Offers.Listings.Availability.Type';
    const OFFERSLISTINGSCONDITION = 'Offers.Listings.Condition';
    const OFFERSLISTINGSCONDITIONSUB_CONDITION = 'Offers.Listings.Condition.SubCondition';
    const OFFERSLISTINGSDELIVERY_INFOIS_AMAZON_FULFILLED = 'Offers.Listings.DeliveryInfo.IsAmazonFulfilled';
    const OFFERSLISTINGSDELIVERY_INFOIS_FREE_SHIPPING_ELIGIBLE = 'Offers.Listings.DeliveryInfo.IsFreeShippingEligible';
    const OFFERSLISTINGSDELIVERY_INFOIS_PRIME_ELIGIBLE = 'Offers.Listings.DeliveryInfo.IsPrimeEligible';
    const OFFERSLISTINGSDELIVERY_INFOSHIPPING_CHARGES = 'Offers.Listings.DeliveryInfo.ShippingCharges';
    const OFFERSLISTINGSIS_BUY_BOX_WINNER = 'Offers.Listings.IsBuyBoxWinner';
    const OFFERSLISTINGSLOYALTY_POINTSPOINTS = 'Offers.Listings.LoyaltyPoints.Points';
    const OFFERSLISTINGSMERCHANT_INFO = 'Offers.Listings.MerchantInfo';
    const OFFERSLISTINGSPRICE = 'Offers.Listings.Price';
    const OFFERSLISTINGSPROGRAM_ELIGIBILITYIS_PRIME_EXCLUSIVE = 'Offers.Listings.ProgramEligibility.IsPrimeExclusive';
    const OFFERSLISTINGSPROGRAM_ELIGIBILITYIS_PRIME_PANTRY = 'Offers.Listings.ProgramEligibility.IsPrimePantry';
    const OFFERSLISTINGSPROMOTIONS = 'Offers.Listings.Promotions';
    const OFFERSLISTINGSSAVING_BASIS = 'Offers.Listings.SavingBasis';
    const OFFERSSUMMARIESHIGHEST_PRICE = 'Offers.Summaries.HighestPrice';
    const OFFERSSUMMARIESLOWEST_PRICE = 'Offers.Summaries.LowestPrice';
    const OFFERSSUMMARIESOFFER_COUNT = 'Offers.Summaries.OfferCount';
    const PARENT_ASIN = 'ParentASIN';
    const RENTAL_OFFERSLISTINGSAVAILABILITYMAX_ORDER_QUANTITY = 'RentalOffers.Listings.Availability.MaxOrderQuantity';
    const RENTAL_OFFERSLISTINGSAVAILABILITYMESSAGE = 'RentalOffers.Listings.Availability.Message';
    const RENTAL_OFFERSLISTINGSAVAILABILITYMIN_ORDER_QUANTITY = 'RentalOffers.Listings.Availability.MinOrderQuantity';
    const RENTAL_OFFERSLISTINGSAVAILABILITYTYPE = 'RentalOffers.Listings.Availability.Type';
    const RENTAL_OFFERSLISTINGSBASE_PRICE = 'RentalOffers.Listings.BasePrice';
    const RENTAL_OFFERSLISTINGSCONDITION = 'RentalOffers.Listings.Condition';
    const RENTAL_OFFERSLISTINGSCONDITIONSUB_CONDITION = 'RentalOffers.Listings.Condition.SubCondition';
    const RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_AMAZON_FULFILLED = 'RentalOffers.Listings.DeliveryInfo.IsAmazonFulfilled';
    const RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_FREE_SHIPPING_ELIGIBLE = 'RentalOffers.Listings.DeliveryInfo.IsFreeShippingEligible';
    const RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_PRIME_ELIGIBLE = 'RentalOffers.Listings.DeliveryInfo.IsPrimeEligible';
    const RENTAL_OFFERSLISTINGSDELIVERY_INFOSHIPPING_CHARGES = 'RentalOffers.Listings.DeliveryInfo.ShippingCharges';
    const RENTAL_OFFERSLISTINGSMERCHANT_INFO = 'RentalOffers.Listings.MerchantInfo';

    /**
     * @return array
     */
    public static function getValues() {

        return array(
            self::BROWSE_NODE_INFOBROWSE_NODES,
            self::BROWSE_NODE_INFOBROWSE_NODESANCESTOR,
            self::BROWSE_NODE_INFOBROWSE_NODESSALES_RANK,
            self::BROWSE_NODE_INFOWEBSITE_SALES_RANK,
            self::IMAGESPRIMARYSMALL,
            self::IMAGESPRIMARYMEDIUM,
            self::IMAGESPRIMARYLARGE,
            self::IMAGESVARIANTSSMALL,
            self::IMAGESVARIANTSMEDIUM,
            self::IMAGESVARIANTSLARGE,
            self::ITEM_INFOBY_LINE_INFO,
            self::ITEM_INFOCONTENT_INFO,
            self::ITEM_INFOCONTENT_RATING,
            self::ITEM_INFOCLASSIFICATIONS,
            self::ITEM_INFOEXTERNAL_IDS,
            self::ITEM_INFOFEATURES,
            self::ITEM_INFOMANUFACTURE_INFO,
            self::ITEM_INFOPRODUCT_INFO,
            self::ITEM_INFOTECHNICAL_INFO,
            self::ITEM_INFOTITLE,
            self::ITEM_INFOTRADE_IN_INFO,
            self::OFFERSLISTINGSAVAILABILITYMAX_ORDER_QUANTITY,
            self::OFFERSLISTINGSAVAILABILITYMESSAGE,
            self::OFFERSLISTINGSAVAILABILITYMIN_ORDER_QUANTITY,
            self::OFFERSLISTINGSAVAILABILITYTYPE,
            self::OFFERSLISTINGSCONDITION,
            self::OFFERSLISTINGSCONDITIONSUB_CONDITION,
            self::OFFERSLISTINGSDELIVERY_INFOIS_AMAZON_FULFILLED,
            self::OFFERSLISTINGSDELIVERY_INFOIS_FREE_SHIPPING_ELIGIBLE,
            self::OFFERSLISTINGSDELIVERY_INFOIS_PRIME_ELIGIBLE,
            self::OFFERSLISTINGSDELIVERY_INFOSHIPPING_CHARGES,
            self::OFFERSLISTINGSIS_BUY_BOX_WINNER,
            self::OFFERSLISTINGSLOYALTY_POINTSPOINTS,
            self::OFFERSLISTINGSMERCHANT_INFO,
            self::OFFERSLISTINGSPRICE,
            self::OFFERSLISTINGSPROGRAM_ELIGIBILITYIS_PRIME_EXCLUSIVE,
            self::OFFERSLISTINGSPROGRAM_ELIGIBILITYIS_PRIME_PANTRY,
            self::OFFERSLISTINGSPROMOTIONS,
            self::OFFERSLISTINGSSAVING_BASIS,
            self::OFFERSSUMMARIESHIGHEST_PRICE,
            self::OFFERSSUMMARIESLOWEST_PRICE,
            self::OFFERSSUMMARIESOFFER_COUNT,
            self::PARENT_ASIN,
            self::RENTAL_OFFERSLISTINGSAVAILABILITYMAX_ORDER_QUANTITY,
            self::RENTAL_OFFERSLISTINGSAVAILABILITYMESSAGE,
            self::RENTAL_OFFERSLISTINGSAVAILABILITYMIN_ORDER_QUANTITY,
            self::RENTAL_OFFERSLISTINGSAVAILABILITYTYPE,
            self::RENTAL_OFFERSLISTINGSBASE_PRICE,
            self::RENTAL_OFFERSLISTINGSCONDITION,
            self::RENTAL_OFFERSLISTINGSCONDITIONSUB_CONDITION,
            self::RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_AMAZON_FULFILLED,
            self::RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_FREE_SHIPPING_ELIGIBLE,
            self::RENTAL_OFFERSLISTINGSDELIVERY_INFOIS_PRIME_ELIGIBLE,
            self::RENTAL_OFFERSLISTINGSDELIVERY_INFOSHIPPING_CHARGES,
            self::RENTAL_OFFERSLISTINGSMERCHANT_INFO,
        );
    }
}

