# (c) Copyright [2018-2020] Micro Focus or one of its affiliates.
# Licensed under the Apache License, Version 2.0 (the "License");
# You may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
# http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#
# |_     |~) _  _| _  /~\    _ |.
# |_)\/  |_)(_|(_||   \_/|_|(_|||
#    /
#              ____________       ______
#             / __        `\     /     /
#            |  \/         /    /     /
#            |______      /    /     /
#                   |____/    /     /
#          _____________     /     /
#          \           /    /     /
#           \         /    /     /
#            \_______/    /     /
#             ______     /     /
#             \    /    /     /
#              \  /    /     /
#               \/    /     /
#                    /     /
#                   /     /
#                   \    /
#                    \  /
#                     \/
#                    _
# \  / _  __|_. _ _ |_)
#  \/ (/_|  | |(_(_|| \/
#                     /
# VerticaPy is a Python library with scikit-like functionality to use to conduct
# data science projects on data stored in Vertica, taking advantage Vertica’s
# speed and built-in analytics and machine learning features. It supports the
# entire data science life cycle, uses a ‘pipeline’ mechanism to sequentialize
# data transformation operations, and offers beautiful graphical options.
#
# VerticaPy aims to solve all of these problems. The idea is simple: instead
# of moving data around for processing, VerticaPy brings the logic to the data.
#
#
# Modules
#
# VerticaPy Modules
from verticapy.learn.metrics import *
from verticapy.learn.plot import *
from verticapy.utilities import *
from verticapy.toolbox import *
from verticapy import vDataFrame
from verticapy.connections.connect import read_auto_connect
from verticapy.errors import *
from verticapy.learn.vmodel import *

# ---#
class MultinomialNB(MulticlassClassifier):
    """
---------------------------------------------------------------------------
Creates a MultinomialNB object by using the Vertica Highly Distributed 
and Scalable Naive Bayes on the data. It is a "probabilistic classifiers" 
based on applying Bayes theorem with strong (naïve) independence assumptions 
between the features. 

Parameters
----------
name: str
	Name of the the model. The model will be stored in the DB.
cursor: DBcursor, optional
	Vertica DB cursor. 
alpha: float, optional
	A float that specifies use of Laplace smoothing if the event model is 
	categorical, multinomial, or Bernoulli.
	"""

    def __init__(
        self, name: str, cursor=None, alpha: float = 1.0,
    ):
        check_types([("name", name, [str], False)])
        self.type, self.name = "MultinomialNB", name
        self.set_params({"alpha": alpha})
        if not (cursor):
            cursor = read_auto_connect().cursor()
        else:
            check_cursor(cursor)
        self.cursor = cursor
        version(cursor=cursor, condition=[8, 0, 0])
