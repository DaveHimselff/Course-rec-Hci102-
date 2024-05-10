import pandas as pd
import numpy as np
import pickle
from sklearn.model_selection import train_test_split
from sklearn.neighbors import KNeighborsClassifier
from sklearn import metrics

# Read the dataset
career = pd.read_csv('dataset9000.data', header=None)

# Convert non-numeric columns to numeric
numeric_columns = career.columns[:17]
career[numeric_columns] = career[numeric_columns].apply(pd.to_numeric, errors='coerce')

# Split the data into X (skills) and y (roles)
X = np.array(career.iloc[:, 0:17])  # X is skills
y = np.array(career.iloc[:, 17])  # y is roles

# Split the data into training and test sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=524)

# Train the KNN classifier
knn = KNeighborsClassifier(n_neighbors=5)
knn.fit(X_train, y_train)

# Make predictions on the test set
y_pred = knn.predict(X_test)

# Calculate accuracy
accuracy = metrics.accuracy_score(y_test, y_pred)
print('Accuracy:', accuracy * 100)

# Save the trained model
pickle.dump(knn, open('careerlast.pkl', 'wb'))
print('Trained model saved as careerlast.pkl')