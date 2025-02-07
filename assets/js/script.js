document.addEventListener("DOMContentLoaded", () => {
  const fixedMessage = document.createElement("a");
  fixedMessage.id = "fluxari-fixed-message";
  fixedMessage.href = "https://effethemes.com/themes/fluxari-wordpress-theme/";
  fixedMessage.target = "_blank";
  fixedMessage.innerText = "Unlock the full potential of the Fluxari Theme by upgrading to the premium version today!";

  Object.assign(fixedMessage.style, {
      position: "fixed",
      top: "50%",
      right: "0",
      transform: "translateY(-50%)",
      background: "#333",
      color: "#fff",
      padding: "10px 20px",
      writingMode: "vertical-rl",
      textAlign: "center",
      fontSize: "14px",
      zIndex: "1000",
      cursor: "pointer",
      textDecoration: "none",
  });

  document.body.appendChild(fixedMessage);
});
