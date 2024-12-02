<div>
    @if($showModal)
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                        <div>
                            <div class="mx-auto flex items-center justify-center rounded-full">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/shopping-cart-page-01-product-03.jpg"
                                     class="max-w-96 max-h-96 h-auto"
                                     alt="product-logo">
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-base font-semibold text-gray-900" id="modal-title">
                                    American Coffee Dark
                                </h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur amet
                                        labore.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 my-3">
                            <button type="button" class="relative items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-50 focus:z-10">
                                <span class="text-center">+</span>
                            </button>

                            <input
                                    wire:model="quantity"
                                    type="number"
                                    class="rounded-md bg-white px-3 py-1.5 text-center text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">

                            <button type="button" class="relative items-center rounded-l-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-50 focus:z-10">
                                <span class="text-center">-</span>
                            </button>
                        </div>
                        <div class="mt-5 sm:mt-6">
                            <button type="button"
                                    class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
