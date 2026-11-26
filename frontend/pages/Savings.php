<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Savings | Expense Tracker</title>

    <link rel="stylesheet" href="../css/general.css" />
    <link rel="stylesheet" href="../css/savings.css" />
  </head>

  <body>
    <aside class="sidebar">
      <div class="profile">
        <img
          src="../assets/images/user-icon.png"
          alt=""
          class="profile-avatar"
        />
        <div class="profile-details">
          <p class="profile-name">ilyes</p>
          <span class="profile-label">Account</span>
        </div>
      </div>

      <nav class="nav-menu">
        <a href="home.php">
          <img
            src="../assets/images/icons/home_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"
            alt=""
            class="nav-icon"
          />
          <span>Home</span>
        </a>
        <a href="Expenses.php">
          <img
            src="../assets/images/icons/payments_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"
            alt=""
            class="nav-icon"
          />
          <span>Expenses</span>
        </a>
        <a href="Savings.php" aria-current="page">
          <img
            src="../assets/images/icons/savings_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"
            alt=""
            class="nav-icon"
          />
          <span>Savings</span>
        </a>
        <a href="Settings.php">
          <img
            src="../assets/images/icons/settings_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"
            alt=""
            class="nav-icon"
          />
          <span>Settings</span>
        </a>
        <a href="Support.php">
          <img
            src="../assets/images/icons/support_agent_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"
            alt=""
            class="nav-icon"
          />
          <span>Support</span>
        </a>
      </nav>
    </aside>

    <main class="content">
      <section id="add-savings-sidebar" aria-labelledby="add-savings-title">
        <h1 id="add-savings-title">Create a savings goal</h1>
        <form id="savings-form" name="savingsForm" method="POST">
          <div class="savings-field">
            <label for="savings-title">Goal title</label>
            <input
              type="text"
              id="savings-title"
              name="title"
              maxlength="150"
              placeholder="e.g. Emergency fund"
              required
            />
          </div>

          <div class="savings-field">
            <label for="target-amount">Target amount</label>
            <input
              type="number"
              id="target-amount"
              name="target_amount"
              min="0.01"
              max="9999999999.99"
              step="0.01"
              placeholder="0.00"
              required
            />
          </div>

          <div class="savings-field">
            <label for="current-amount">Current amount</label>
            <input
              type="number"
              id="current-amount"
              name="current_amount"
              min="0"
              max="9999999999.99"
              step="0.01"
              value="0"
            />
          </div>

          <div class="savings-field">
            <label for="target-date">Target date (optional)</label>
            <input type="date" id="target-date" name="target_date" />
          </div>

          <button class="savings-submit" type="submit">+ Add savings goal</button>
        </form>
      </section>

      <section class="savings-set" aria-labelledby="savings-list-title">
        <h2 id="savings-list-title">Your savings goals</h2>
        <p class="savings-empty-state">Your savings goals will appear here.</p>
      </section>
    </main>
  </body>
</html>
