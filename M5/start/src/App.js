import { useEffect, useState } from "react";
import Form from "./Form";

function App() {
  const [remainingTime, setRemainingTime] = useState(60);
  const [isStarted, setIsStarted] = useState(false);

  useEffect(() => {
    let timer;
    if (isStarted && remainingTime > 0) {
      timer = setInterval(() => {
        setRemainingTime(prevTime => prevTime - 1);
      }, 1000);
    } else if (remainingTime === 0) {
      setIsStarted(false);
    }
    return () => clearInterval(timer);
  }, [isStarted, remainingTime]);

  const handleStart = () => {
    setIsStarted(true);
  };
  
  return (
    <div className="App">
      {/* {remainingTime}
      <button onClick={handleStart}>Start</button> */}
      <Form/>
    </div>
  );
}

export default App;
