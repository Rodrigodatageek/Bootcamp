const emailFromLogin = (name) => name + "@covidconspiracy.il";

const loginFromName = (first, last) => {
  const part1 = last.substr(0, 4);
  const part2 = first.substr(0, 3);
  return part1.toLowerCase() + part2.toLowerCase();
};

const emailFromName = (first, last) => {
  const login = loginFromName(first, last);
  return emailFromLogin(login);
};
