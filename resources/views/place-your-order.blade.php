 <!-- Order Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
        <div class="modal-header">
          <h5 class="modal-title" id="orderModalLabel">Place Your Order</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="POST">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="orderName" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="orderName" required>
            </div>
            <div class="mb-3">
                <label for="orderNumber" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="number" id="orderNumber" placeholder="+374..." required>
                <small id="countryName" class="form-text text-muted mt-1"></small>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Send Order</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
    const countryMap = {
        '+1': 'United States/Canada',
        '+44': 'United Kingdom',
        '+374': 'Armenia',
        '+91': 'India',
        '+49': 'Germany',
        '+33': 'France',
        '+7': 'Russia',
        '+81': 'Japan',
        '+61': 'Australia',
        // ➕ Add more as needed
    };

    document.addEventListener('DOMContentLoaded', function () {
        const phoneInput = document.getElementById('orderNumber');
        const countryDisplay = document.getElementById('countryName');

        phoneInput.addEventListener('input', function () {
            const input = phoneInput.value.trim();
            let matchedCountry = '';

            for (const code in countryMap) {
                if (input.startsWith(code)) {
                    matchedCountry = countryMap[code];
                    break;
                }
            }

            countryDisplay.textContent = matchedCountry ? `Country: ${matchedCountry}` : '';
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
    const phoneInput = document.getElementById('orderNumber');
    const countryDisplay = document.getElementById('countryName');

    phoneInput.addEventListener('input', function () {
        const input = phoneInput.value.trim();
        let matchedCountry = '';

        for (const code in countryMap) {
            if (input.startsWith(code)) {
                matchedCountry = countryMap[code];
                break;
            }
        }

        countryDisplay.textContent = matchedCountry ? `Country: ${matchedCountry}` : '';
    });

    // ✅ Show the modal on page load
    const modal = new bootstrap.Modal(document.getElementById('orderModal'), {
        backdrop: 'static',
        keyboard: false
    });
    modal.show();
});

</script>