from flask import Flask, render_template, request
import pickle
import numpy as np

app = Flask(__name__)


@app.route('/')
def career():
    return render_template("hometest.html")


@app.route('/predict', methods=['POST', 'GET'])
def result():
    if request.method == 'POST':
        result = request.form
        i = 0
        print(result)
        res = result.to_dict(flat=True)
        print("res:", res)
        arr1 = res.values()
        arr = ([value for value in arr1])

        # Convert values to numeric format
        data = np.array(arr, dtype=np.float64)  # Assuming the values are floating-point numbers

        data = data.reshape(1, -1)
        print(data)
        loaded_model = pickle.load(open("careerlast.pkl", 'rb'))
        predictions = loaded_model.predict(data)

        print(predictions)
        pred = loaded_model.predict_proba(data)
        print(pred)
        pred = pred > 0.05

        i = 0
        j = 0
        index = 0
        res = {}
        final_res = {}
        while j < 17:
            if pred[i, j]:
                res[index] = j
                index += 1
            j += 1

        index = 0
        for key, values in res.items():
            if values != predictions[0]:
                final_res[index] = values
                print('final_res[index]:', final_res[index])
                index += 1

        jobs_dict = {
            0: 'Bachelor of Science in Electronics Engineering',
            1: 'Bachelor of Science in Computer Engineering',
            2: 'Bachelor of Science in Information Technology',
            3: 'Bachelor of Science in Electronics Engineering',
            4: 'Bachelor of Library Information Science',
            5: 'Bachelor of Science in Information Technology',
            6: 'Bachelor of Library Information Science',
            7: 'Bachelor of Science in Information Technology',
            8: 'Bachelor of Library Information Science',
            9: 'Bachelor of Science in Information Technology',
            10: 'Bachelor of Library Information Science',
            11: 'Bachelor of Science in Computer Engineering',
            12: 'Bachelor of Science in Information Technology',
            13: 'Bachelor of Science in Computer Engineering',
            14: 'Bachelor of Science in Computer Engineering',
            15: 'Bachelor of Science in Electronics Engineering',
            16: 'Bachelor of Science in Electronics Engineering'
        }

        job = {}
        index = 1

        data1 = predictions[0]
        print(data1)
        return render_template("testafter.html", final_res=final_res, job_dict=jobs_dict, job0=data1)


if __name__ == '__main__':
    app.run(debug=True)