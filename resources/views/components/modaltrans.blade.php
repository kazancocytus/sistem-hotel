<!-- Modal -->
<div class="modal fade" id="TransactionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-2xl p-6">
            <div class="modal-header mb-2 justify-center">
                <h1 class=" text-4xl font-bold text-colorBg font-josefin" id="exampleModalLabel">Payment</h1>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="d-grid gap-2">
                        <button id="confirmPaymentButton" data-bs-toggle="modal" data-bs-target="#SuccessModal"
                            class="btn font-josefin bg-colorsucceshover font-semibold hover:bg-colorgreen hover:text-colorText text-colorPrimary"
                            type="button">Confirm Payment</button>
                        <button
                            class="btn font-josefin bg-colordanger font-semibold hover:bg-colorcancelhover hover:text-colorText text-colorPrimary"
                            type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SUccess Modal -->

<div class="modal fade" id="SuccessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content rounded-2xl p-6">
        <div class="modal-header justify-center">
          <h2 class=" text-center font-josefin font-semibold text-3xl">Payment Success! <i class="bi bi-check2-circle text-4xl"></i></h2>
        </div>
          <div class="modal-body">
              <form action="">
                  <div class="d-grid gap-2">
                      <p class=" font-josefin font-medium text-center">Thank you for choosing to stay with us at Evergreen Hotel. We are delighted to have you as our guest and hope that you have a wonderful stay with us!</p>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>

{{-- Pay At Hotel Modal --}}

<div class="modal fade" id="PayHotelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content rounded-2xl p-6">
          <div class="modal-header mb-2 justify-center">
              <h2 class=" text-3xl font-bold text-colorBg font-josefin" id="exampleModalLabel">Pay at the Receptionist<i class="bi bi-buildings text-4xl pl-3"></i></h2>
          </div>
          <div class="modal-body">
              <p class="font-josefin font-medium text-center">Thank you for choosing to stay with us at Evergreen Hotel. Kindly make sure to arrive at the hotel at the appointed time.</p>
              <p class="font-josefin font-medium text-center italic underline">Please note that any changes to the reservation or cancellations must be made at least 24 hours in advance.</p>
          </div>
      </div>
  </div>
</div>
