<style>
    @media (max-width: 739px) {
        .laptop {
            display: none;
        }
    }

</style>
<li class="product-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
    <div class="contain-product layout-default content_product_sm" style="height: 285px; width:150px; border-radius: 7px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
        <div class="product-thumb">
            <form>
                @csrf
                <input type="hidden" value="{{ $product->product_name }}" id="recently_viewed_product_name_{{ $product->product_id }}">
                <input type="hidden" value="{{ number_format($price_discount->price_now, 0, ',', '.') }}₫" id="recently_viewed_product_price_{{ $product->product_id }}">
            </form>
            <a href="{{ URL::to('product_detail_slug/' . $product->slug) }}" class="link-to-product btn_recently_viewed" data-id="{{ $product->product_id }}" id="recently_viewed_product_detail_{{ $product->product_id }}">
                <img src="{{ asset('public/upload/' . $product->product_image) }}" alt="dd" style="width: 95%; height: 120px; padding-left: 2.5%; padding-top: 5px; border-radius: 7px" class="product-thumnail"
                    id="recently_viewed_product_img_{{ $product->product_id }}">
            </a>
            <span href="#" class="lookup get_val_quickview btn_call_quickview_detail btn_open_modal" data-id="{{ $product->product_id }}"><i class="biolife-icon icon-search"></i></span>
        </div>
        <div class="info">
            <h4 class="product-title">
                <a href="{{ URL::to('product_detail_slug/' . $product->slug) }}" class="pr-name name_product cus_prod_name_card_sm btn_recently_viewed" data-id="{{ $product->product_id }}" style="height: 60px; font-size: 12px">
                    {{ $product->product_name }}
                </a>
            </h4>
            <div class="price">
                @if ($price_discount->percent_discount == 0)
                    <ins>
                        <span class="price-amount cus_price_card_sm" style="font-size: 12px;">
                            <span class="currencySymbol" style="font-size: 12px;">
                                {{ number_format($price_discount->price_now, 0, ',', '.') }}₫
                            </span>
                    </ins>
                @else
                    <ins><span class="price-amount cus_price_card_sm" style="font-size: 12px;">
                            <span class="currencySymbol">{{ number_format($price_discount->price_now, 0, ',', '.') }}₫</span>
                    </ins>
                    <del>
                        <span class="price-amount" style="font-size: 12px;">
                            <span class="currencySymbol">{{ number_format($price_discount->price_old, 0, ',', '.') }}₫
                            </span>
                    </del>
                @endif
            </div>
            <div class="content_qty_rating laptop">
                <div class="rating" style="display: flex;">
                    <p class="star-rating" style="align-self: flex-start">
                        <span class="width-80percent" style="width:{{ $info_rating_saled->avg_rating * 20 }}%"></span>
                    </p>
                </div>
                <div class="availeble_product" style="align-self: end;">Đã bán: {{ $info_rating_saled->count_product_saled }}</div>
            </div>
            <div class="slide-down-box">
                <div class="buttons" style="margin-top: 5px">
                    {{-- wish list --}}
                    @if (Session::get('customer_id'))
                        <a class="btn wishlist-btn btn_add_wish_lish" style="cursor: pointer;" data-id="{{ $product->product_id }}">
                            @if ($check_already_wish->check_already == 1)
                                <i class="fa fa-heart" aria-hidden="true" style="color: var(--radius-color)"></i>
                            @else
                                <i class="fa fa-heart icon_wish_list_{{ $product->product_id }}" aria-hidden="true"></i>
                            @endif
                        </a>
                    @else
                        <a href="{{ URL::to('login_client') }}" class="btn wishlist-btn">
                            @if ($check_already_wish->check_already == 1)
                                <i class="fa fa-heart" aria-hidden="true" style="color: var(--radius-color)"></i>
                            @else
                                <i class="fa fa-heart" aria-hidden="true"></i>
                            @endif
                        </a>
                    @endif
                    {{-- end wish list --}}
                    @if (Session::get('customer_id'))
                        <button href="#" class="btn add-to-cart-btn btn-sm add_cart_one" data-id="{{ $product->product_id }}" style="font-size: 12px; width:80%; margin-left:10%; background-color: var(--radius-color) !important; color:white">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            thêm vào giỏ hàng
                        </button>
                    @else
                        <a href="{{ URL::to('login_client') }}" class="btn add-to-cart-btn btn-sm" style="font-size: 12px; width:80%; margin-left:10%; background-color: var(--radius-color) !important; color:white">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            thêm vào giỏ hàng
                        </a>
                    @endif
                    {{-- add cart --}}
                    <input type="hidden" class="val_qty_{{ $product->product_id }}" value="1">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    {{-- end add cart --}}
                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        @if ($price_discount->percent_discount != 0)
            <div class="content_discount_product">
                <div class="content_sub_discount bg_discount">
                    <div class="content_title_discount">
                        <span class="percent">{{ $price_discount->percent_discount }}%</span>
                        <span class="txt_giam">giảm</span>
                    </div>
                </div>
            </div>
        @endif
    </div>
</li>
