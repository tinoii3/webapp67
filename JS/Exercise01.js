const matches = (obj, source) => 
    Object.keys(obj).length === Object.keys(source).length &&
    Object.keys(source).every(key => obj.hasOwnProperty(key) && obj[key] === source[key]);
    const obj1 = { name: 'John', age: 30, job: 'Developer' };
    const obj2 = { age: 30, job: 'Developer'};
    
console.log(matches(obj1, obj2));