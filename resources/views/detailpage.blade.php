<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/evergreenlogobgcrop.png') }}">
    <title>Evergreen Hotel</title>
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>

    @include('components.navbar')


    <div class=" bg-colorSecondary">
        <div class=" container p-0 m-0 self-stretch">
            <hr class="mx-auto w-44 rounded-full mb-32" style="height: 5px!important;">
            <div class="block mt-14 mx-10 w-auto p-16 bg-colorPrimary border border-gray-200 rounded-2xl shadow">
                <div class=" mx-8 font-josefin font-extrabold text-4xl text-center">Input Your Detail Of Reservation
                </div>
                <hr class="mx-auto w-2/5 rounded-full mb-10 mt-3" style="height: 5px!important;">
                <div class="">
                    <form class="row flex flex-wrap" action="{{ route('store.transaction') }}" method="POST">
                        @csrf
                        <div class="relative ml-8 my-10">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <div class=" ml-2 h-10 text-black text-4xl"><i class="bi bi-credit-card"></i></div>
                            </div>
                            <input type="text" id="no_rekening" name="no_rekening"
                                class=" bg-transparent border border-white text-gray-900 text-xl rounded-2xl w-4/5 ps-16 p-2.5"
                                placeholder="Your Bank Account Number">
                        </div>
                        <div class=" object-top flex flex-col mx-10 w-1/3">
                            <div class=" row w-1/2">
                                <label class=" font-josefin mb-2" for="check_in">Check In Date</label>
                                <input class=" border-white text-colorBg bg-transparent rounded-2xl" type="date"
                                    id="check_in" name="check_in">
                            </div>
                            <div class=" mx-4 my-1 row">
                                <i class=" text-left text-4xl bi bi-arrow-down-short"></i>
                            </div>
                            <div class=" row w-1/2">
                                <label class=" font-josefin mb-2" for="check_out">Check Out Date</label>
                                <input class=" border-white text-colorBg bg-transparent rounded-2xl" type="date"
                                    id="check_out" name="check_out">
                            </div>
                        </div>
                        <!-- Input Number -->
                        <div class=" ml-32 flex flex-col w-2/5">
                            <div class=" w-full py-2 px-3 bg-transparent border border-white rounded-lg"
                                data-hs-input-number>
                                <div class="w-full flex justify-between items-center">
                                    <div>
                                        <span class=" font-josefin mt-2 block font-medium text-base text-colorBg">
                                            Suites Room
                                        </span>
                                        <span class=" font-josefin mt-1 block text-xs text-colorBg">
                                            $399 a Night
                                        </span>
                                    </div>
                                    <div id="suites-counter" class="flex items-center gap-x-1.5 room-selected">
                                        <button type="button" id="suites-decrement"
                                            class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                            data-hs-input-number-decrement>
                                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                            </svg>
                                        </button>
                                        <input id="suites-input" name="suites-input" min="0" data-max="10"
                                            class="p-0 w-6 bg-transparent border-0 text-colorBg text-center focus:ring-0"
                                            type="text" value="0" data-hs-input-number-input>
                                        <button type="button" id="suites-increment"
                                            class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                            data-hs-input-number-increment>
                                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                                <path d="M12 5v14" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class=" w-full py-2 px-3 bg-transparent border border-white rounded-lg"
                                data-hs-input-number>
                                <div class="w-full flex justify-between items-center">
                                    <div>
                                        <span class=" font-josefin mt-2 block font-medium text-base text-colorBg">
                                            Deluxe Room
                                        </span>
                                        <span class=" font-josefin mt-1 block text-xs text-colorBg">
                                            $299 a Night
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-x-1.5 room-selected" id="deluxe-counter">
                                        <button type="button" id="deluxe-decrement"
                                            class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                            data-hs-input-number-decrement>
                                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                            </svg>
                                        </button>
                                        <input id="deluxe-input" name="deluxe-input" min="0" data-max="10"
                                            class="p-0 w-6 bg-transparent border-0 text-colorBg text-center focus:ring-0"
                                            type="text" value="0" data-hs-input-number-input>
                                        <button type="button" id="deluxe-increment"
                                            class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                            data-hs-input-number-increment>
                                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                                <path d="M12 5v14" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class=" w-full py-2 px-3 bg-transparent border border-white rounded-lg"
                                data-hs-input-number>
                                <div class="w-full flex justify-between items-center">
                                    <div>
                                        <span class=" font-josefin mt-2 block font-medium text-base text-colorBg">
                                            Standart Room
                                        </span>
                                        <span class=" font-josefin mt-1 block text-xs text-colorBg">
                                            $199 a Night
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-x-1.5 room-selected" id="standart-counter">
                                        <button type="button" id="standart-decrement"
                                            class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                            data-hs-input-number-decrement>
                                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                            </svg>
                                        </button>
                                        <input id="standart-input" name="standart-input" min="0"
                                            data-max="10"
                                            class="p-0 w-6 bg-transparent border-0 text-colorBg text-center focus:ring-0"
                                            type="text" value="0" data-hs-input-number-input>
                                        <button type="button" id="standart-increment"
                                            class="w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                            data-hs-input-number-increment>
                                            <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14" />
                                                <path d="M12 5v14" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <!-- End Input Number -->


                        <div
                            class="mt-8  ml-10 block w-11/12 p-6 bg-colorPrimary border border-gray-200 rounded-2xl shadow">
                            <table class="w-full border border-white hidden" aria-hidden="true"
                                style="display: table !important;">
                                <tbody class="">
                                    <tr class="">
                                        <th>Items</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                    <tr id="suites-row">
                                        <td>Suites Room</td>
                                        <td>0</td>
                                        <td>$0</td>
                                    </tr>
                                    <tr id="deluxe-row">
                                        <td>Deluxe Room</td>
                                        <td>0</td>
                                        <td>$0</td>
                                    </tr>
                                    <tr id="standart-row">
                                        <td>Standart Room</td>
                                        <td>0</td>
                                        <td>$0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class=" mt-12 justify-center flex flex-row ">
                            <button type="button" href="" data-bs-toggle="modal"
                                data-bs-target="#TransactionModal"class=" h-16 w-2/5 px-5 py-3 relative border-r-2 rounded-l-xl group overflow-hidden text-2xl font-bold bg-colorThird text-white inline-block font-josefin text-center">
                                <span
                                    class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-colorgreen group-hover:h-full opacity-90"></span>
                                <span class="relative group-hover:text-colorSecondary">Book Now</span>
                            </button>
                            <button type="button" href="" data-bs-toggle="modal"
                                data-bs-target="#PayHotelModal"
                                class=" h-16 w-2/5 px-5 py-3 relative rounded-r-xl group overflow-hidden text-2xl font-bold bg-colorThird text-white inline-block font-josefin text-center">
                                <span
                                    class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-colorgreen group-hover:h-full opacity-90"></span>
                                <span class="relative group-hover:text-colorSecondary">Pay At Hotel</span>
                            </button>
                            @include('components.modaltrans')
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('components.footer')
    </div>

    <script type="text/javascript">
        const debounce = _.debounce;
        // Get all the necessary elements 
        const suitesInput = document.getElementById('suites-input')
        const deluxeInput = document.getElementById('deluxe-input')
        const standartInput = document.getElementById('standart-input')
        const checkInInput = document.getElementById('check_in');
        const checkOutInput = document.getElementById('check_out');
        const suitesPrice = 399
        const deluxePrice = 299
        const standartPrice = 199
        const table = document.querySelector('table tbody');


        function getDaysBetweenDates(date1, date2) {
            const timeDifference = Math.abs(date2 - date1);
            const daysDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));
            return daysDifference;
        }

        function updateTable() {
            updateTableRow(suitesInput, tableRows[1], suitesPrice);
            updateTableRow(deluxeInput, tableRows[2], deluxePrice);
            updateTableRow(standartInput, tableRows[3], standartPrice);
            updateTableVisibility();
        }

        // Toggle the visibility of the table based on the input values 
        function updateTableVisibility() {
            const checkIn = new Date(Date.parse(checkInInput.value));
            const checkOut = new Date(Date.parse(checkOutInput.value));

            if (checkIn && checkOut) {
                if (suitesInput.value > 0) {
                    tableRows[1].classList.remove('hidden');
                } else {
                    tableRows[1].classList.add('hidden');
                }
                if (deluxeInput.value > 0) {
                    tableRows[2].classList.remove('hidden');
                } else {
                    tableRows[2].classList.add('hidden');
                }
                if (standartInput.value > 0) {
                    tableRows[3].classList.remove('hidden');
                } else {
                    tableRows[3].classList.add('hidden');
                }
            }
        }

        // Update the table row based on the input value 
        function updateTableRow(input, row, price, daysDifference) {
            const quantity = input.value
            const totalPrice = price * quantity * daysDifference
            row.children[1].textContent = quantity
            row.children[2].textContent = `$${parseInt(totalPrice)}`

        }
        // Update all the table rows 
        const tableRows = document.querySelectorAll('table tbody tr')
        let totalRow;

        function updateTable() {
            const NoRekening = document.getElementById('no_rekening').value;
            const checkIn = new Date(Date.parse(checkInInput.value));
            const checkOut = new Date(Date.parse(checkOutInput.value));
            const daysDifference = getDaysBetweenDates(checkIn, checkOut);

            if (daysDifference === 0) {
                alert('please input check-in and check-out dates');
                return;
            }

            if (checkIn > checkOut) {
                alert('check-out must be later than check-in');
                return;
            }


            if (checkIn < checkOut) {
                updateTableRow(suitesInput, tableRows[1], suitesPrice, daysDifference)
                updateTableRow(deluxeInput, tableRows[2], deluxePrice, daysDifference)
                updateTableRow(standartInput, tableRows[3], standartPrice, daysDifference)


                let totalPrice = (parseInt(suitesInput.value * suitesPrice * daysDifference)) + (parseInt(deluxeInput
                    .value * deluxePrice * daysDifference)) + (parseInt(standartInput.value * standartPrice *
                    daysDifference));


                if (+suitesInput.value === 0 && +deluxeInput.value === 0 && +standartInput.value === 0) {
                    if (totalRow) {
                        totalRow.classList.add('hidden');
                    }
                } else {
                    if (!totalRow) {
                        totalRow = table.insertRow();
                        const totalCell1 = totalRow.insertCell();
                        totalCell1.classList.add('text-left', 'font-bold');
                        totalCell1.textContent = 'Total';
                        const totalCell2 = totalRow.insertCell();
                        totalCell2.classList.add('text-right', 'font-bold');
                    }
                    totalRow.cells[1].textContent = '$' + Number(totalPrice.toFixed(2));
                    totalRow.classList.remove('hidden');
                }

                console.log(totalPrice);

                // send data to controller  
                $.ajax({
                    method: "POST",
                    url: "{{ route('store.transaction') }}",
                    data: {
                        'check_out': checkOutInput.value,
                        'check_in': checkInInput.value,
                        'no_rekening': NoRekening.value,
                        'suites-input': suitesInput.value,
                        'deluxe-input': deluxeInput.value,
                        'standart-input': standartInput.value,
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            }
            updateTableVisibility()

        }

        // Increment the input value and update the table
       

      
        function incrementInput(input) {
            if (input.value = 0) {
                input.value++;
                updateTable();
                updateTableVisibility();
            }
        }


        // Decrement the input value and update the table 
        function decrementInput(input) {
            if (input.value > 0) {
                input.value--
                updateTable()
                updateTableVisibility()
            }
        }

        const debouncedUpdateTable = debounce(updateTable, 500);

        // Add event listeners to the input buttons 
        document.getElementById('suites-increment').addEventListener('click', () => {
            if (checkInInput.value && checkOutInput.value) {
                incrementInput(suitesInput)
                debouncedUpdateTable();
                updateTableVisibility();
            
            } else {
                alert('please complete check in and check out first');
                document.getElementById('suites-increment').setAttribute('disabled', 'disabled');
                document.getElementById('suites-decrement').setAttribute('disabled', 'disabled');
                return;
            }
        });

        document.getElementById('suites-decrement').addEventListener('click', () => {
            if (checkInInput.value && checkOutInput.value) {
                decrementInput(suitesInput)
                debouncedUpdateTable();
                updateTableVisibility();
            } else {
                alert('please complete check in and check out first');
                suitesInput.setAttribute('disabled', 'disabled');
                deluxeInput.setAttribute('disabled', 'disabled');
                standartInput.setAttribute('disabled', 'disabled');
                return;
            }
        });

        document.getElementById('deluxe-increment').addEventListener('click', () => {
            if (checkInInput.value && checkOutInput.value) {
                incrementInput(deluxeInput)
                debouncedUpdateTable();
                updateTableVisibility();
            } else {
                alert('please complete check in and check out first');
                document.getElementById('deluxe-increment').setAttribute('disabled', 'disabled');
                document.getElementById('deluxe-decrement').setAttribute('disabled', 'disabled');
                return;
            }
        });

        document.getElementById('deluxe-decrement').addEventListener('click', () => {
            if (checkInInput.value && checkOutInput.value) {
                incrementInput(deluxeInput)
                debouncedUpdateTable();
                updateTableVisibility();
            } else {
                alert('please complete check in and check out first');
                suitesInput.setAttribute('disabled', 'disabled');
                deluxeInput.setAttribute('disabled', 'disabled');
                standartInput.setAttribute('disabled', 'disabled');
                return;
            }
        });

        document.getElementById('standart-increment').addEventListener('click', () => {
            if (checkInInput.value && checkOutInput.value) {
                incrementInput(deluxeInput)
                debouncedUpdateTable();
                updateTableVisibility();
            } else {
                alert('please complete check in and check out first');
                document.getElementById('standart-increment').setAttribute('disabled', 'disabled');
                document.getElementById('standart-decrement').setAttribute('disabled', 'disabled');
                return;
            }
        });

        document.getElementById('standart-decrement').addEventListener('click', () => {
            if (checkInInput.value && checkOutInput.value) {
                incrementInput(deluxeInput)
                debouncedUpdateTable();
                updateTableVisibility();
            } else {
                alert('please complete check in and check out first');
                suitesInput.setAttribute('disabled', 'disabled');
                deluxeInput.setAttribute('disabled', 'disabled');
                standartInput.setAttribute('disabled', 'disabled');
                return;
            }
        });

        checkInInput.addEventListener('input', () => {
            if (checkInInput.value && checkOutInput.value) {
                document.getElementById('suites-increment').removeAttribute('disabled');
                document.getElementById('suites-decrement').removeAttribute('disabled');
                document.getElementById('deluxe-increment').removeAttribute('disabled');
                document.getElementById('deluxe-decrement').removeAttribute('disabled');
                document.getElementById('standart-increment').removeAttribute('disabled');
                document.getElementById('standart-decrement').removeAttribute('disabled');

            }
        });

        checkOutInput.addEventListener('input', () => {
            if (checkInInput.value && checkOutInput.value) {
                document.getElementById('suites-increment').removeAttribute('disabled');
                document.getElementById('suites-decrement').removeAttribute('disabled');
                document.getElementById('deluxe-increment').removeAttribute('disabled');
                document.getElementById('deluxe-decrement').removeAttribute('disabled');
                document.getElementById('standart-increment').removeAttribute('disabled');
                document.getElementById('standart-decrement').removeAttribute('disabled');
            }
        });

        // Initialize the table with the initial input values 
        updateTable();
    </script>

    @include('sweetalert::alert')
</body>

</html>
