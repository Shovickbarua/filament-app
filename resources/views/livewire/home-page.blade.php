<div class="">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-2 flex justify-end">
            <button class="text-gray-800 hover:text-blue-500 px-4 py-2">Login</button>
            <button class="text-white bg-blue-700 hover:bg-blue-600 px-4 py-2 rounded-lg ml-2">Get Started</button>
        </div>
    </nav>
    <div class="bg-url bg-cover bg-center w-full">
        <div class='flex px-4 py-5 justify-end'>
            <button class="text-white bg-blue-700 hover:bg-blue-600 px-4 py-2 rounded-lg ml-2">Export PDF</button>
            <button class="text-white bg-blue-700 hover:bg-blue-600 px-4 py-2 rounded-lg ml-2">Export EXCEL</button>
        </div>
        {{-- Table Section --}}
        <div class="">
            <div class="flex gap-2 justify-center pt-24">
                <div class="my-auto relative" id="showModalButton" data-table-number="6">
                    <img src="{{asset('images/left.png')}}"/>
                    <div class="absolute top-[80px] right-4 w-8 h-8 rounded-full border-2 border-black flex items-center justify-center">
                        <span>6</span>
                    </div>
                </div>
                <div class="">
                    <div class="grid grid-cols-2 pb-2">
                        <div class="mx-auto relative" id="showModalButton" data-table-number="1">
                            <img src="{{asset('images/chair.png')}}"/>
                            <div class="absolute top-3 left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full border-2 border-black flex items-center justify-center">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="mx-auto relative" id="showModalButton" data-table-number="2">
                            <img src="{{asset('images/chair.png')}}"/>
                            <div class="absolute top-3 left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full border-2 border-black flex items-center justify-center">
                                <span>2</span>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('images/table.png')}}"/>
                    <div class="">
                        <div class="grid grid-cols-2 pt-2">
                            <div class="mx-auto relative" id="showModalButton" data-table-number="5">
                                <img src="{{asset('images/bottom.png')}}"/>
                                <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full border-2 border-black flex items-center justify-center">
                                    <span>5</span>
                                </div>
                            </div>
                            <div class="mx-auto relative" id="showModalButton" data-table-number="4">
                                <img src="{{asset('images/bottom.png')}}"/>
                                <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 w-8 h-8 rounded-full border-2 border-black flex items-center justify-center">
                                    <span>4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-auto relative" id="showModalButton" data-table-number="3">
                    <img src="{{asset('images/right.png')}}"/>
                    <div class="absolute top-[80px] left-4 w-8 h-8 rounded-full border-2 border-black flex items-center justify-center">
                        <span>3</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="text-center my-8">
            <button class="text-white bg-blue-700 hover:bg-blue-600 px-4 py-2 rounded-lg" id="showModalButton">Show Modal</button>
        </div> --}}
    </div>
     <!-- Add a new button to show the modal -->

            <!-- Modal -->
            <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-10">
                <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
                    <!-- Modal Header -->
                    <div class="flex justify-between items-center pb-3 p-6 border-b border-gray-200">
                        <h3 class="text-lg font-semibold">Table</h3>
                        <button class="text-gray-500 hover:text-gray-700 text-3xl" id="closeModal">
                            &times;
                        </button>
                    </div>

                    <!-- Modal Body -->
                    <form wire:submit="save" class="mt-4">
                        <div class="p-6">
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <div class="flex items-center border border-gray-300 rounded-md shadow-sm focus-within:ring-indigo-500 focus-within:border-indigo-500 px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 text-gray-400">
                                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                      </svg>
                                    <input
                                        type="text"
                                        id="name"
                                        wire:model='name'
                                        class="w-full px-3 py-2 border-none focus:outline-none focus:ring-0 bg-transparent sm:text-sm"
                                        placeholder="Name"
                                    >
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" wire:model='email' class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="email">
                            </div>
                            <div class="mb-4">
                                <label for="dish" class="block text-sm font-medium text-gray-700">Dish</label>
                                <select id="dish_id" wire:model="dish_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="">Select a dish</option>
                                    @foreach ($dish as $ds)
                                        <option value="{{ $ds->id }}">{{ $ds->meal }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="drink" class="block text-sm font-medium text-gray-700">Drink</label>
                                <select id="drink" wire:model='drink' class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="">Select a drink</option>
                                    <option value="drink1">Drink 1</option>
                                    <option value="drink2">Drink 2</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="comment" wire:model='comment' class="block text-sm font-medium text-gray-700">Comment</label>
                                <input type="text" id="comment" wire:model='comment' class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Comment">
                            </div>
                            <input type="text" name="tableNumber" id='tableNumber' wire:model="tableNumber" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <!-- Modal Footer -->
                        <div class="flex justify-end pt-3 border-t border-gray-200 p-6">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                // JavaScript to handle modal toggle
                const modal = document.getElementById('modal');
                const closeModal = document.getElementById('closeModal');
                let selectedTableNumber = null;

                // Get all elements with the 'data-table-number' attribute
                document.querySelectorAll('[data-table-number]').forEach(button => {
                    button.addEventListener('click', (event) => {
                        // Get the table number from the data attribute
                        selectedTableNumber = event.currentTarget.getAttribute('data-table-number');

                        // Set the table number in the input field
                        document.getElementById('tableNumber').value = selectedTableNumber;

                        // Show the modal
                        modal.classList.remove('hidden');
                    });
                });

                closeModal.addEventListener('click', () => {
                    modal.classList.add('hidden');
                });

                // Handle form submission
                document.querySelector('form').addEventListener('submit', (event) => {
                    event.preventDefault();

                    // Add the table number to your form submission logic
                    const formData = new FormData(event.target);
                    formData.append('tableNumber', selectedTableNumber);

                    // Example logic to save the data (can be adjusted to use Livewire or an AJAX request)
                    console.log('Saving data for table number:', selectedTableNumber);

                    // Submit form data or make an AJAX request here...
                });
            </script>
</div>
