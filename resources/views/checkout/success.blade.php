<x-app-layout>
    <div class="w-[400px] mx-auto bg-emerald-500 py-4 px-6 text-white rounded-lg shadow-md">
        <div class="text-center">
            <svg
                class="mx-auto"
                width="100px"
                height="100px"
                viewBox="-0.06 0 60 60"
                data-name="add to shopping cart"
                id="add_to_shopping_cart"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    style="fill:#FFFFFF;fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.1;-inkscape-stroke:none"
                    d="M940,942h-2a2,2,0,0,0-2,2v2a2,2,0,0,0,2,2h3.046a17.907,17.907,0,0,0,1.989,4H938a2,2,0,0,0-2,2v2a2,2,0,0,0,2,2h8a1.993,1.993,0,0,0,1.808-1.17,17.981,17.981,0,0,0,20.192.135V968a4,4,0,0,1-4,4H920v7.418a0.582,0.582,0,0,0,.582.582l2.129,0a6.971,6.971,0,0,1,12.615,0h15.383a7.009,7.009,0,1,1-.6,4H935.922a6.973,6.973,0,0,1-13.809,0H922v0h-2a4,4,0,0,1-4-4V934h-4a2,2,0,0,1,0-4h8v8h20.461A18.052,18.052,0,0,0,940,942Zm12,24a2,2,0,0,0,2,2h8a2,2,0,0,0,2-2v-2a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v2Zm-16,0a2,2,0,0,0,2,2h8a2,2,0,0,0,2-2v-2a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v2Zm21,19.937a3,3,0,1,0-3-3A3,3,0,0,0,957,985.937Zm-28,0a3,3,0,1,0-3-3A3,3,0,0,0,929,985.937ZM932,944a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v2a2,2,0,0,0,2,2h8a2,2,0,0,0,2-2v-2Zm0,10a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v2a2,2,0,0,0,2,2h8a2,2,0,0,0,2-2v-2Zm0,10a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v2a2,2,0,0,0,2,2h8a2,2,0,0,0,2-2v-2Z"
                    data-name="shopping cart"
                    id="shopping_cart"
                    transform="translate(-910 -930)"
                />
                <path
                    style="fill:#FFFFFF;fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.1;-inkscape-stroke:none"
                    d="M957.875,930a12,12,0,1,1-12,12A12,12,0,0,1,957.875,930ZM952,944h4v4a2,2,0,0,0,4,0v-4h4a2,2,0,0,0,0-4h-4v-4a2,2,0,0,0-4,0v4h-4A2,2,0,0,0,952,944Z"
                    data-name="add
                    to favorites copy 3"
                    id="add_to_favorites_copy_3"
                    transform="translate(-910 -930)"
                />
            </svg>
            <h2 class="text-xl font-semibold mb-2">Order Completed!</h2>
            <p class="text-sm text-emerald-200">
                Dear {{ $customer->name }}, your order has been successfully completed. Thank you for your purchase!
            </p>
        </div>
    </div>
</x-app-layout>
