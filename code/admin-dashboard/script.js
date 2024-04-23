document.getElementById('billForm').addEventListener('submit', function(event) {
  event.preventDefault();

  // Get input values
  let userName = document.getElementById('userName').value;
  let flatNumber = document.getElementById('flatNumber').value;
  let maintenanceCharge = 5000; // Fixed maintenance charge
  let paidAmount = parseFloat(document.getElementById('paidAmount').value);
  
  // Calculate penalty if paid after deadline (e.g., 10% of maintenance charge)
  let currentDate = new Date(); // Current date
  let deadlineDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), 5);
  let penalty = 0; // Initialize penalty as 0
  if (currentDate > deadlineDate) {
    let daysLate = Math.ceil((currentDate - deadlineDate) / (1000 * 60 * 60 * 24));
    penalty = maintenanceCharge * 0.002 * daysLate; // 0.2% penalty per day for late payment
  }
  
  // Calculate total amount due and dues
  let totalAmountDue = maintenanceCharge + penalty;
  let dues = totalAmountDue - paidAmount;
 
  // Get current date and time in Indian format
  let now = new Date();
  let dateTime = now.toLocaleString('en-IN'); // Date and time in Indian format
 
  // Construct table content
  let tableContent = `
    <h2>Receipt for ${userName} - Flat Number ${flatNumber}</h2>
    <table border="1">
      <tr>
        <th>Date and Time</th>
        <th>Maintenance Charge</th>
        <th>Late Payment Penalty</th>
        <th>Total Amount Due</th>
        <th>Dues</th>
      </tr>
      <tr>
        <td>${dateTime}</td>
        <td>₹${maintenanceCharge.toFixed(0)}</td>
        <td>${penalty > 0 ? `₹${penalty.toFixed(0)}` : 'No Penalty'}</td>
        <td>₹${totalAmountDue.toFixed(0)}</td>
        <td>${dues > 0 ? `₹${dues.toFixed(0)}` : 'No Dues'}</td>
      </tr>
    </table>
  `;
  
  // Storing table content in sessionStorage to pass to the next page
  sessionStorage.setItem('tableContent', tableContent);
  
  // Redirecting to the next page
  window.location.href = 'next_page.html';
});
