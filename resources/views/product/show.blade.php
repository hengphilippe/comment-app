<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center gap-2">
            <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-0{{ $product->id }}.jpg" 
                alt="{{ $product->description }}" class="h-full w-8 object-cover object-center">
            {{ __($product->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <section class="bg-white dark:bg-gray-900 py-8 lg:py-16 antialiased">
                    <div class="max-w-2xl mx-auto px-4">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (20)</h2>
                        </div>
                        
                        @include('product.comments.new-comment')

                        {{-- comment component --}}
                        <x-comment name="Pello" :body="$product->description" :xid="$product->id">

                            {{-- if it's have sub-comment ? --}}
                            <x-comment-sub name="Ah Lork" body="ahhaha :D" /> 

                            <form class="comment-reply relative">
                                @csrf
                                <input type="text"
                                class="mb-3 ml-12 text-sm text-gray-900 w-11/12 border-0 dark:text-white
                                 dark:placeholder-gray-400 dark:bg-gray-800 rounded-md pr-8"
                                placeholder="Write a comment..." />
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                    class="w-4 text-yellow-50 absolute top-0 right-0 mt-2.5 mr-3"
                                    fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                    </svg>  
                                </button>
                                                           
                            </form>
                            
                        </x-comment>
                        <x-comment name='Jonh Smitt' :body="$product->description" :xid="$product->id"/>

                    </div>
                    </section>


            </div>
        </div>
    </div>


    <script>
        let replys = document.querySelectorAll(".reply-btn");

        replys.forEach(element => {
            element.addEventListener("click", (e) => {
                let cmt = e.target.parentElement.parentElement;
                console.log(cmt);
                let newFrm = document.createElement("form");
                newFrm.setAttribute("method", "POST");
                newFrm.setAttribute("action", "subcomment/"+ cmt.getAttribute("data-id") +"/add");
                newFrm.className = "comment-reply relative";
                newFrm.innerHTML = `
                    @csrf
                    <input type="text"
                    class="mb-3 ml-12 text-sm text-gray-900 w-11/12 border-0 dark:text-white
                        dark:placeholder-gray-400 dark:bg-gray-800 rounded-md pr-8"
                    placeholder="Write a comment..." />
                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                        class="w-4 text-yellow-50 absolute top-0 right-0 mt-2.5 mr-3"
                        fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                        </svg>  
                    </button>
                `;
                console.log(newFrm);
            });
        });

    </script> 
</x-app-layout>