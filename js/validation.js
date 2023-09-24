const EMAIL_REGEX =
  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const MOBILE_REGEX = /^\+?[0-9]{10}$/;
const ADDRESS_REGEX = /^[a-zA-Z0-9\s,.\-#]+$/;
const validError = {
  mobileNumber: "Enter A Valid Number*",
  email: "Enter A Valid Email Address*",
  required: "This Field is Required*",
  password: "Please Enter Password*",
  Conpassword: "Confirm Password Must be same as Password*",
};

const setError = (e, element, message) => {
  e.preventDefault();
  if (!element.parentElement.querySelector("span")) {
    const errorEle = document.createElement("span");
    errorEle.setAttribute("class", "help-inline");
    errorEle.innerHTML = message;
    element.parentElement.append(errorEle);
  } else {
    element.parentElement.querySelector(".help-inline").innerHTML = message;
  }
};

const removeError = (input) => {
  if (input.parentElement.querySelector("span")) {
    input.parentElement.querySelector(".help-inline").remove();
  }
};

const validation = (e, form) => {
  Array.from(form.querySelectorAll("input , textarea")).forEach((ele) => {
    checkInput(e, ele);
    ele.addEventListener("input", () => {
      checkInput(e, ele);
    });
  });
};

let password = "";
const checkInput = (e, input) => {
  if (input.type !== "submit") {
    if (!EMAIL_REGEX.test(input.value) && input.name === "email") {
      setError(e, input, validError.email);
    } else if (!MOBILE_REGEX.test(input.value) && input.name === "mobile") {
      setError(e, input, validError.mobileNumber);
    } else if (input.name === "password") {
      password = input.value;
      if (input.value.trim() === "") {
        setError(e, input, validError.password);
      } else {
        removeError(input);
      }
    } else if (input.name === "confirmPassword" && input.value !== password) {
      setError(e, input, validError.Conpassword);
    } else if (input.value.trim() === "") {
      setError(e, input, validError.required);
    } else {
      removeError(input);
    }
  }
};

Array.from(document.querySelectorAll("form")).forEach((form) =>
  form.addEventListener("submit", (e) => validation(e, form))
);
