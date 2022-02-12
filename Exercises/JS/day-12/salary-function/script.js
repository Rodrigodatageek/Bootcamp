const salary = (pay, hours, days) => {
  return pay * hours * days;
};

const taxed_salary = (salary, tax) => {
  return salary * (1 - tax / 100);
};
